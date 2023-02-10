<?php

namespace App\Http\Middleware;

use Cache;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckAccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {

        if (!$request->header('Authorization')) {
            /*
             * Check if access token is stored in the session
             */
            $access_Token = $this->getAccessTokenFromStorage();

            if (!$access_Token) {
                /*
                 * If access token is not stored, refresh it using the refresh token
                 */
                $refresh_Token = $this->getRefreshTokenFromStorage();

                if (!$refresh_Token) {
                    $this->createAccessToken($request);
                } else {
                    /*
                     * Refresh access token using the refresh token
                     */
                    $response = Http::asForm()->post(config('pos-api.URI'),
                        ['refresh_token' => $refresh_Token],
                        ['grant_type' => 'refresh_token']
                    );

                    $data = collect(json_decode($response, true));

                    if (isset($data['access_token'])) {
                        /*
                         * Store access token in the session
                         */
                        session(['access_token' => $data['access_token']]);

                        $this->storeAccessToken($data['access_token'], $data['refresh_token'], $data['expires_in']);

                        /*
                         * Update request header with the new access token
                         */
                        $request->headers->set('Authorization', 'Bearer ' . $data['access_token']);
                    } else {
                        /*
                         * Redirect to login page if refresh token is not valid
                         */
                        return redirect()->route('login');
                    }
                }
            } else {
                /*
                 * Update request header with the stored access token
                 */
                echo "refresh token";
                $request->headers->set('Authorization', 'Bearer ' . $access_Token);
            }
        }

        return $next($request);
    }

    protected function createAccessToken(Request $request): void
    {
        /*
         * Load the API tokens from storage or make an API call to retrieve them
         */

        try {
            $response = Http::asForm()->post(config('pos-api.URI'), [
                'username' => 'kalamsarker',
                'password' => 'crown@uk',
                'client_id' => '5',
                'client_secret' => 'YnNrQ4QhdvFeDdhYQscIzIaU48uDGF1R5qWAPAiQ',
                'grant_type' => 'password',
            ]);
            $response = collect(json_decode($response));

            $this->storeAccessToken($response['access_token'], $response['refresh_token'], $response['expires_in']);
            $request->headers->set('Authorization', 'Bearer ' . $response['access_token']);
        } catch (HttpException $e) {
            throw  $e;
        }
    }

    private function getAccessTokenFromStorage()
    {
        /*
         * Load the access token from storage (e.g. using the Laravel cache)
         *  Return the access token
         */
        return session('access_token');
//        return Cache::get('access_token');
    }

    private function getRefreshTokenFromStorage()
    {
        /*
         * Load the refresh token from storage (e.g. using Laravel's encrypted cookies)
         * Return the refresh token
         */
        return session('refresh_token');
//        return Cache::get('refresh_token');
    }

    private function storeAccessToken($accessToken, $refreshToken, $expires): void
    {
        /*
         * Store the access token in storage (e.g. using the Laravel cache)
         */
        session(['access_token' => $accessToken]);
        session(['refresh_token' => $refreshToken]);
        session(['ttl' => $expires]);
//        Cache::put('access_token', $accessToken, $expires);

    }


}

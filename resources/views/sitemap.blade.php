
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/menu') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/contact') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/login') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/register') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/terms-of-service') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/privacy-policy') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc>{{ url('/eula') }}</loc>
        <lastmod>{{  now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>
    @foreach ($categories as $category)
        <url>
            <loc>{{ url('/') }}/menu/{{ \Illuminate\Support\Str::slug($category->name) }}</loc>
            <lastmod>{{ $category->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>hourly</changefreq>
            <priority>1</priority>
        </url>
    @endforeach
</urlset>


<div class="container" x-data="{ 'createApiTokenModal':false }" @keydown.esc="createApiTokenModal=false">
    <div class="flex justify-between item-content">
        <h3 class="text-gray-700 text-3xl font-medium">API Settings</h3>
        <button
                class="flex flex-wrap  py-2 px-4 bg-gradient-to-br hover:bg-gradient-to-bl from-red-500/50 to-orange-400/50 rounded-lg text-gray-700 dark:text-gray-300 font-semibold"
                type="button" @click="createApiTokenModal=true">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
            </svg>
            Create Access Token
        </button>
    </div>


    <!-- session Message -->
    <div class="relative ">
        <div class="fixed bottom-4 right-2 z-50">
            <?php if( session()->has('success')): ?>
                <div
                        class="border-2 border-green-400/50 bg-white dark:bg-gray-800 dark:text-gray-300 shadow-md p-2 my-1 rounded-lg"
                        x-data="{ show: true }" x-show="show" wire:key="<?php echo e(('createApiTokenModal').random_int(3,8)); ?>"
                        x-init="setTimeout(() => show = false, 3000)">

                    <p x-init="createApiTokenModal=false">
                        <?php echo e(session()->get('success')); ?>

                    </p>


                </div>
            <?php endif; ?>

        </div>
    </div>

    <section id="api-info-table" class="relative overflow-x-auto">
        <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Client ID</th>
                <th scope="col" class="px-6 py-3">Username</th>
                <th scope="col" class="px-6 py-3">password</th>
                <th scope="col" class="px-6 py-3">Client Secret</th>
                <th scope="col" class="px-6 py-3">Grant Type</th>
                <th scope="col" class="px-6 py-3">Host</th>
                <th scope="col" class="px-6 py-3">Token URI</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 m-8">
                <td ><?php echo e(config('pos-api.CLIENT_ID')); ?> </td>
                <td ><?php echo e(config('pos-api.USERNAME')); ?> </td>
                <td ><?php echo e(config('pos-api.PASSWORD')); ?> </td>
                <td ><?php echo e(config('pos-api.CLIENT_SECRET')); ?> </td>
                <td ><?php echo e(config('pos-api.GRANT_TYPE')); ?> </td>
                <td ><?php echo e(config('pos-api.HOST')); ?> </td>
                <td ><?php echo e(config('pos-api.URI')); ?> </td>
            </tr>
            </tbody>
        </table>
    </section>



    <!--Overlay-->
    <div class="overflow-auto bg-gray-900/50" x-show="createApiTokenModal"
         :class="{ 'absolute inset-0 z-10 flex items-center justify-center': createApiTokenModal}">
    </div>

    <!--Dialog-->
    <section id="createApiTokenModal" tabindex="-1" role="dialog" aria-modal="true" x-show="createApiTokenModal"
             class="overflow-y-auto overflow-x-hidden fixed top-1   z-20 w-3/4 h-modal md:h-full"
             wire:key="<?php echo e(('createApiTokenModal').random_int(3,8)); ?>">
        <div class="lg:mx-6 my-2 max-w-screen-xl shadow-lg">

            <div class=" bg-white dark:bg-gray-800 rounded-lg  lg:col-span-3">
                <!-- modal header -->
                <div class="flex justify-between p-4">
                    <h4 class="text-gray-500 font-semibold"> Create New Access Token</h4>
                    <button class="text-red-300 hover:text-red-500 drop-shadow-xl flex flex-wrap"
                            @click="createApiTokenModal=false">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                        <?php echo e(__("Close")); ?></button>
                </div>

                <hr class="border-2 border-red-500/20"/>

                <!-- main form content -->
                <form wire:submit.prevent="createAccessToken" class="space-y-4 p-5 lg:p-8 mx-2 mb-2 text-gray-800 dark:text-gray-200">
                    <div>
                        <label class="sr-only" for="form.uri">Request URL</label>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'api url','id' => 'form.uri','wire:model.defer' => 'form.uri']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'api url','id' => 'form.uri','wire:model.defer' => 'form.uri']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.uri']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.uri']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                    <div>
                        <label class="sr-only" for="form.host">API ENDPOINT</label>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'api url','id' => 'form.host','wire:model.defer' => 'form.host']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'api url','id' => 'form.host','wire:model.defer' => 'form.host']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.host']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.host']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div>
                        <label class="sr-only" for="form.client_secret">Client Secret</label>
                        <textarea
                                class="w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none"
                                placeholder="Client Secret"
                                 wire:model.defer="form.client_secret"
                                id="form.client_secret"></textarea>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.client_secret']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.client_secret']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="sr-only" for="form.client_id">Client ID</label>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Client ID','id' => 'form.client_id','wire:model.defer' => 'form.client_id']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Client ID','id' => 'form.client_id','wire:model.defer' => 'form.client_id']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.client_id']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.client_id']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <label class="sr-only" for="form.grant_type">Grant Type</label>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Grant Type Ex: Password','id' => 'form.grant_type','wire:model.defer' => 'form.grant_type']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Grant Type Ex: Password','id' => 'form.grant_type','wire:model.defer' => 'form.grant_type']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.grant_type']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.grant_type']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>

                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="sr-only" for="form.username">Username</label>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Username','id' => 'form.username','wire:model.defer' => 'form.username']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Username','id' => 'form.username','wire:model.defer' => 'form.username']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.username']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.username']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                        <div>
                            <label class="sr-only" for="form.password">Password</label>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'password','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Password','id' => 'form.password','wire:model.defer' => 'form.password']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'password','class' => 'w-full p-3 border border-red-200 rounded-lg bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none ','placeholder' => 'Password','id' => 'form.password','wire:model.defer' => 'form.password']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input-error','data' => ['for' => 'form.password']]); ?>
<?php $component->withName('jet-input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'form.password']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>

                    </div>


                    <div class="mt-4">
                        <?php if (isset($component)) { $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Button::class, []); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'submit','class' => 'inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto']); ?>
                            <span class="font-bold" wire:loading.remove>
                                Create Access Token
                            </span>
                            <span class="font-bold" wire:loading>
                                Generating Access Token
                            </span>
                            <svg aria-hidden="true" wire:loading
                                 class="w-8 h-8 mr-2 ml-3 text-white animate-spin fill-red-600"
                                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                      fill="currentColor"/>
                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                      fill="currentFill"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" wire:loading.remove
                                 class="w-5 h-5 ml-3"
                                 fill="none"
                                 viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940)): ?>
<?php $component = $__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940; ?>
<?php unset($__componentOriginal065ae5da12ba8e75c6b4e84d90798c2fb812b940); ?>
<?php endif; ?>
                    </div>
                </form>
                <hr class="border-2 border-red-500/20"/>

                <?php if($token): ?>
                    <div class="m-4 px-5 w-auto text-gray-800 dark:text-gray-200">

                        <div class="flex justify-between">
                            <p class="text-gray-800 dark:text-gray-200">
                                <span class="italic">Type: </span>
                               <span class="font-mono" >
                                   <?php echo e($token['token_type']); ?>

                               </span>
                            </p>
                            <p class="text-md text-gray-800 dark:text-gray-200">
                                <span class="italic">Expire in:</span>
                                <?php echo e(\Carbon\Carbon::now()->addMilliseconds($token['expires_in'])->format('M d Y, H:i:s')); ?></p>
                        </div>
                        <p>
                            <label class="italic" for="access_token">Access Token:</label>
                            <textarea
                                    class="w-full border border-red-200 rounded-lg bg-transparent focus:ring-2
                                    focus:ring-indigo-500 outline-none text-justify px-2 text-sm font-mono"
                                    placeholder="Access Token" readonly rows="8"
                                    id="access_token">
                                <?php echo e($token['access_token']); ?>

                            </textarea>
                        </p>
                        <p>
                            <label class="italic" for="refresh_token">Refresh Token: </label>
                            <textarea
                                    class="w-full border border-red-200 rounded-lg bg-transparent focus:ring-2
                                    focus:ring-indigo-500 outline-none text-justify px-2 text-sm font-mono"
                                    placeholder="Refresh Token" readonly rows="7"
                                    id="access_token">
                                <?php echo e($token['refresh_token']); ?>

                            </textarea>
                        </p>
                        <p class="text-md text-red-500 dark:text-red-400 italic pb-2">
                            <?php echo e("Store the above information securely for future use."); ?>

                        </p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

</div>

<?php $__env->startSection('jsAfterLoad'); ?>

<?php $__env->stopSection(); ?>


<?php /**PATH C:\xampp\htdocs\crown\resources\views/livewire/admin/pages/api.blade.php ENDPATH**/ ?>
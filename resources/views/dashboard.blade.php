<x-layouts.app>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8">
                    <h1 class="text-2xl font-bold text-gray-900 mb-8">
                        Welcome to TALL Stack with WireUI!
                    </h1>
                    
                    <!-- Demo Components -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        
                        <!-- Buttons -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-700">Buttons</h3>
                            <x-button label="Primary Button" />
                            <x-button label="Secondary" variant="secondary" />
                            <x-button label="Success" positive />
                            <x-button label="Danger" negative />
                        </div>

                        <!-- Form Inputs -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-700">Form Inputs</h3>
                            <x-input label="Name" placeholder="Enter your name" />
                            <x-textarea label="Message" placeholder="Write your message..." />
                            <x-select
                                label="Select an option"
                                placeholder="Choose one..."
                                :options="[
                                    ['name' => 'Option 1', 'id' => 1],
                                    ['name' => 'Option 2', 'id' => 2],
                                    ['name' => 'Option 3', 'id' => 3],
                                ]"
                                option-label="name"
                                option-value="id"
                            />
                        </div>

                        <!-- Cards & Notifications -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold text-gray-700">Components</h3>
                            <x-card title="Sample Card">
                                <p class="text-gray-600">This is a sample card component from WireUI.</p>
                            </x-card>
                            
                            <x-button 
                                label="Show Notification" 
                                onclick="$wireui.notify({
                                    title: 'Success!',
                                    description: 'This is a WireUI notification.',
                                    icon: 'success'
                                })"
                            />
                        </div>
                    </div>

                    <!-- Statistics -->
                    <div class="mt-12">
                        <h3 class="text-lg font-semibold text-gray-700 mb-6">TALL Stack Technologies</h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <x-card>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-blue-600">T</div>
                                    <div class="text-sm text-gray-600">Tailwind CSS</div>
                                </div>
                            </x-card>
                            <x-card>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-green-600">A</div>
                                    <div class="text-sm text-gray-600">Alpine.js</div>
                                </div>
                            </x-card>
                            <x-card>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-red-600">L</div>
                                    <div class="text-sm text-gray-600">Laravel</div>
                                </div>
                            </x-card>
                            <x-card>
                                <div class="text-center">
                                    <div class="text-3xl font-bold text-purple-600">L</div>
                                    <div class="text-sm text-gray-600">Livewire</div>
                                </div>
                            </x-card>
                        </div>
                    </div>
                    
                    <!-- Livewire Counter Component -->
                    <div class="mt-12">
                        <h3 class="text-lg font-semibold text-gray-700 mb-6">Interactive Livewire Component</h3>
                        <livewire:counter />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>

<div class="p-6">
    <x-card title="Interactive Counter">
        <div class="text-center space-y-6">
            <!-- Counter Display -->
            <div class="text-6xl font-bold text-blue-600 mb-4">
                {{ $count }}
            </div>
            
            <!-- Name Input -->
            <div class="max-w-sm mx-auto">
                <x-input 
                    label="Your Name" 
                    placeholder="Enter your name"
                    wire:model.live="name"
                />
            </div>
            
            @if($name)
                <p class="text-gray-600">Hello, {{ $name }}! Click the buttons to interact with the counter.</p>
            @endif
            
            <!-- Counter Controls -->
            <div class="flex justify-center space-x-4">
                <x-button 
                    label="Decrement" 
                    icon="minus" 
                    negative
                    wire:click="decrement"
                />
                
                <x-button 
                    label="Reset" 
                    icon="refresh" 
                    secondary
                    wire:click="reset"
                />
                
                <x-button 
                    label="Increment" 
                    icon="plus" 
                    positive
                    wire:click="increment"
                />
            </div>
            
            <!-- Progress Bar -->
            @if($count > 0)
                <div class="max-w-md mx-auto">
                    <x-progress-bar 
                        :value="($count % 10) * 10" 
                        :max="100"
                        label="Progress to next milestone"
                        color="primary"
                    />
                </div>
            @endif
            
            <!-- Statistics -->
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="text-center">
                    <div class="text-2xl font-semibold text-green-600">{{ floor($count / 5) }}</div>
                    <div class="text-sm text-gray-500">Milestones</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-semibold text-purple-600">{{ $count % 2 === 0 ? 'Even' : 'Odd' }}</div>
                    <div class="text-sm text-gray-500">Number Type</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-semibold text-orange-600">{{ $count * $count }}</div>
                    <div class="text-sm text-gray-500">Squared</div>
                </div>
            </div>
        </div>
    </x-card>
</div>

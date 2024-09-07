<div class="flex h-screen">
    <x-sidebar>
        <x-sidebar.brand />
        <x-sidebar.group label="Tags">
			<x-sidebar.item href="#" badge="10" :active="true">All Tags</x-sidebar.item>
			<x-sidebar.item href="#" :active="false">All Tags</x-sidebar.item>
			<x-sidebar.item href="#" :active="false">Bugs</x-sidebar.item>
			<x-sidebar.item href="#" :active="false">Enhancements</x-sidebar.item>
		</x-sidebar.group>
    </x-sidebar>
    <x-kanban>
        <x-kanban.header/>
        <x-kanban.board>
        <x-kanban.group label="To-Do">
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>					
				</x-kanban.group>
				<x-kanban.group label="To-Do">
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>					
				</x-kanban.group>
				<x-kanban.group label="To-Do">
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>
					<x-kanban.card>
						Task description
					</x-kanban.card>					
				</x-kanban.group>    
		</x-kanban.board>
    </x-kanban>
</div>

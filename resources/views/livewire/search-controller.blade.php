<div>
       <form>
            <i class="fa fa-search text-royal-blue"></i>
            <input wire:model.debounce.500ms="search" type="text" placeholder="Type to search">
        </form>
            @if (strlen($search) >= 1) 
            <div>
            @if (count($blogs)> 0)
            <!-- <ul> -->
                @foreach ($blogs as $blog)
                    <a href="#" wire:click.defer="updateSearch('{{ $blog->id }}' ,'{{$blog->title}}')" class="cursor-pointer d-block p-2 bg-light text-white">
                      {{$blog->title}}
                    </a>    
                @endforeach
                <!-- </ul> -->
            @else
                <div class="px-3 py-3">No results for "{{$search}}"</div>
            @endif
            </div>
            @endif
</div>
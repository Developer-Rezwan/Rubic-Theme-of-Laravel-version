@extends('../layout/' . $layout)

@section('subhead')
    <title>Task View</title>
@endsection

@section('subcontent')
<div class="grid grid-cols-12 gap-5 mt-5">
    @for($x = 0; $x <= 10; $x++) 
    <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box bg-theme-1 dark:bg-theme-1 p-5 cursor-pointer zoom-in">
        <div class="font-medium text-base text-white">Pancake & Toast</div>
        <div class="text-theme-22 dark:text-gray-400">8 Items</div>
    </div>
    @endfor
    
    
</div>

@endsection
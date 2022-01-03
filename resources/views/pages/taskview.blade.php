@extends('../layout/' . $layout)

@section('subhead')
    <title>Calendar - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('subcontent')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Calendar</h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <button class="btn btn-primary shadow-md mr-2">Print Schedule</button>
        <div class="dropdown ml-auto sm:ml-0">
            <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                <span class="w-5 h-5 flex items-center justify-center">
                    <i class="w-4 h-4" data-feather="plus"></i>
                </span>
            </button>
            <div class="dropdown-menu w-40">
                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                        <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                    </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="grid grid-cols-12 gap-5 mt-5">

    <!-- BEGIN: Calendar Side Menu -->
    <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
                    <!-- BEGIN: Ticket -->
                    <div class="box p-2">
                        <div class="pos__tabs nav nav-tabs justify-center" role="tablist">
                            <a id="ticket-tab" data-toggle="tab" data-target="#ticket" href="javascript:;" class="flex-1 py-2 rounded-md text-center active" role="tab" aria-controls="ticket" aria-selected="true">Not Started</a>
                            <a id="details-tab" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="details" aria-selected="false">On Hold</a>
                            <a id="details-tab" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="details" aria-selected="false">In Progress</a>
                            <a id="details-tab" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="details" aria-selected="false">Finish</a>
                            <a id="details-tab" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="details" aria-selected="false">Failed</a>
                            <a id="details-tab" data-toggle="tab" data-target="#details" href="javascript:;" class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="details" aria-selected="false">Review</a>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                        <div class="pos__ticket box p-2 mt-5">
                        </div>
                    </div>

            <!-- END: Ticket -->
        
        <div class="box p-5 intro-y mt-5">
            <div class="flex">
                <i data-feather="chevron-left" class="w-5 h-5 text-gray-600"></i>
                <div class="font-medium text-base mx-auto">April</div>
                <i data-feather="chevron-right" class="w-5 h-5 text-gray-600"></i>
            </div>
            <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                <div class="font-medium">Su</div>
                <div class="font-medium">Mo</div>
                <div class="font-medium">Tu</div>
                <div class="font-medium">We</div>
                <div class="font-medium">Th</div>
                <div class="font-medium">Fr</div>
                <div class="font-medium">Sa</div>
                <div class="py-0.5 rounded relative text-gray-600">29</div>
                <div class="py-0.5 rounded relative text-gray-600">30</div>
                <div class="py-0.5 rounded relative text-gray-600">31</div>
                <div class="py-0.5 rounded relative">1</div>
                <div class="py-0.5 rounded relative">2</div>
                <div class="py-0.5 rounded relative">3</div>
                <div class="py-0.5 rounded relative">4</div>
                <div class="py-0.5 rounded relative">5</div>
                <div class="py-0.5 bg-theme-18 dark:bg-theme-9 rounded relative">6</div>
                <div class="py-0.5 rounded relative">7</div>
                <div class="py-0.5 bg-theme-1 dark:bg-theme-1 text-white rounded relative">8</div>
                <div class="py-0.5 rounded relative">9</div>
                <div class="py-0.5 rounded relative">10</div>
                <div class="py-0.5 rounded relative">11</div>
                <div class="py-0.5 rounded relative">12</div>
                <div class="py-0.5 rounded relative">13</div>
                <div class="py-0.5 rounded relative">14</div>
                <div class="py-0.5 rounded relative">15</div>
                <div class="py-0.5 rounded relative">16</div>
                <div class="py-0.5 rounded relative">17</div>
                <div class="py-0.5 rounded relative">18</div>
                <div class="py-0.5 rounded relative">19</div>
                <div class="py-0.5 rounded relative">20</div>
                <div class="py-0.5 rounded relative">21</div>
                <div class="py-0.5 rounded relative">22</div>
                <div class="py-0.5 bg-theme-17 dark:bg-theme-11 rounded relative">23</div>
                <div class="py-0.5 rounded relative">24</div>
                <div class="py-0.5 rounded relative">25</div>
                <div class="py-0.5 rounded relative">26</div>
                <div class="py-0.5 bg-theme-14 dark:bg-theme-12 rounded relative">27</div>
                <div class="py-0.5 rounded relative">28</div>
                <div class="py-0.5 rounded relative">29</div>
                <div class="py-0.5 rounded relative">30</div>
                <div class="py-0.5 rounded relative text-gray-600">1</div>
                <div class="py-0.5 rounded relative text-gray-600">2</div>
                <div class="py-0.5 rounded relative text-gray-600">3</div>
                <div class="py-0.5 rounded relative text-gray-600">4</div>
                <div class="py-0.5 rounded relative text-gray-600">5</div>
                <div class="py-0.5 rounded relative text-gray-600">6</div>
                <div class="py-0.5 rounded relative text-gray-600">7</div>
                <div class="py-0.5 rounded relative text-gray-600">8</div>
                <div class="py-0.5 rounded relative text-gray-600">9</div>
            </div>
            <div class="border-t border-gray-200 dark:border-dark-5 pt-5 mt-5">
                <div class="flex items-center">
                    <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                    <span class="truncate">Independence Day</span>
                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                    <span class="font-medium xl:ml-auto">23th</span>
                </div>
                <div class="flex items-center mt-4">
                    <div class="w-2 h-2 bg-theme-1 dark:bg-theme-10 rounded-full mr-3"></div>
                    <span class="truncate">Memorial Day</span>
                    <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                    <span class="font-medium xl:ml-auto">10th</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Calendar Side Menu -->
    <!-- BEGIN: Calendar Content -->
    <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
        <div class="box p-5">
            <div class="full-calendar" id="calendar"></div>
        </div>
    </div>
    <!-- END: Calendar Content -->
</div>
@endsection

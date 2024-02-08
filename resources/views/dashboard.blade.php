<x-app-layout>
    @include('menu_admin')
    <!--contenido-->
    <div class="container  mx-auto px-2">
        <div class="flex flex-wrap">
            <div class="flex items-center py-4 w-full">
                <div class="w-full">
                    <div class="">
                        <div class="flex flex-wrap justify-between">
                            <div class="items-center ">
                                <h1 class="font-semibold text-xl mb-0 block dark:text-slate-100">Ecommerce</h1>
                                <ol class="list-reset flex text-sm">
                                    <li><a href="#" class="text-gray-500">T-Wind</a></li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-gray-500">Dasboard</li>
                                    <li><span class="text-gray-500 mx-2">/</span></li>
                                    <li class="text-blue-600 hover:text-blue-700">Ecommerce</li>
                                </ol>
                            </div>
                            <div class="flex items-center">
                                <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600">Create New</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end container-->

    <div class="container mx-auto px-2  min-h-[calc(100vh-138px)]  relative pb-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-2 ">
                <div class="card w-full relative overflow-hidden">
                    <div class="grid gap-0 xl:gap-4 grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r border-dashed dark:border-slate-700 border-b xl:border-b-0">
                            <div class="p-4 text-center">
                                <span class="my-1 font-semibold text-2xl dark:text-slate-200">520</span>
                                <h6 class="uppercase text-slate-400 my-2 text-xs font-semibold">Today's Orders</h6>
                            </div>
                        </div>
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r-0 xl:border-r border-dashed dark:border-slate-700 border-b xl:border-b-0">
                            <div class="p-4 text-center">
                                <span class="my-1 font-semibold text-2xl dark:text-slate-200">82.8%</span>
                                <h6 class="uppercase text-slate-400 my-2 text-xs font-semibold">Conversion Rate</h6>
                            </div>
                        </div>
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r border-dashed dark:border-slate-700 border-b md:border-b-0">
                            <div class="p-4 text-center">
                                <span class="my-1 font-semibold text-2xl dark:text-slate-200">$92.5</span>
                                <h6 class="uppercase text-slate-400 my-2 text-xs font-semibold">Avg. Value</h6>
                            </div>
                        </div>
                        <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 ">
                            <div class="p-4 text-center">
                                <span class="my-1 font-semibold text-2xl dark:text-slate-200">$360.50</span>
                                <h6 class="uppercase text-slate-400 my-2 text-xs font-semibold">Gross sale</h6>
                            </div>
                        </div>
                    </div>
                    <div class="border-b border-dashed dark:border-slate-700"></div>
                    <div class="p-4">
                        <h4 class="font-medium py-2 dark:text-slate-300">Revenu Status</h4>
                        <div id="Revenu_Status" class="apex-charts bg-[url('../images/widgets/svg-map.svg')] dark:bg-[url('../images/widgets/dark-map.svg')] bg-contain bg-no-repeat bg-center"></div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2">
                        <div class="card w-full relative">
                            <div class="card-body text-center">
                                <div class="flex justify-between flex-wrap xl:gap-x-2 items-cente">
                                    <div class="text-center inline-flex items-center justify-center ">
                                        <div id="weekly_report" class="h-20 w-32"></div>
                                    </div>
                                    <div class="self-center">
                                        <span class="my-1 font-semibold text-2xl dark:text-slate-300">$24,500</span>
                                        <h6 class="uppercase text-slate-400 my-2 text-xs font-semibold">Today's Revenue</h6>
                                    </div>
                                    <div class="self-center mt-4 xs:mt-0">
                                        <button class="px-3 py-2 lg:px-4 bg-blue-500 text-white text-sm font-semibold rounded hover:bg-blue-600 block"><i class="ti ti-download mr-2"></i>Withdraw</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div class="card w-full relative">
                            <div class="card-body text-center">
                                <div id="map_1" class="w-full h-60"></div>
                                <div class="grid gap-0 xl:gap-4 grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-2 mt-2">
                                    <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r-0 xs:border-r border-dashed dark:border-slate-700 border-b md:border-b-0 xl:border-b-0">
                                        <div class="p-4 text-center">
                                            <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">$15,520 <span class="w-1 h-1 rounded-full bg-pink-500 absolute top-0 right-0"></span></p>
                                            <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">Domestic</h6>
                                        </div>
                                    </div>
                                    <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1">
                                        <div class="p-4 text-center">
                                            <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">$36,880 <span class="w-1 h-1 rounded-full bg-blue-500 absolute top-0 right-0"></span></p>
                                            <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">International</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end inner-grid-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 order-1 lg:order-1 xl:order-1">
                <div class="card w-full relative overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium">Order By Device</h4>
                    </div>
                    <div class="card-body">
                        <div id="Sales" class="h-72 w-full -mt-8"></div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-2 xl:col-span-1 order-2 lg:order-3 xl:order-2">
                <div class="card w-full relative overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium">Reports overview</h4>
                    </div>
                    <div class="card-body">
                        <h2 class="text-3xl font-medium mb-4 dark:text-slate-300">$8836.68</h2>
                        <div class="w-full mx-auto mb-2">
                            <div class="flex items-center">
                                <div class="w-1/4 bg-blue-500 h-2 rounded-tl rounded-bl mr-0.5"></div>
                                <div class="w-1/4 bg-gray-200 dark:bg-slate-700 h-2 mr-0.5 relative">
                                    <div class="h-2 bg-yellow-500"></div>
                                </div>
                                <div class="w-1/4 bg-gray-200 dark:bg-slate-700 h-2 mr-0.5 relative">
                                    <div class="h-2 w-1/2 bg-pink-500"></div>
                                </div>
                                <div class="w-1/4 bg-gray-200 dark:bg-slate-700 h-2 rounded-tr rounded-br"></div>
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-gray-50 dark:bg-gray-700">
                                                <tr>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Device
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                        Amount
                                                    </th>
                                                    <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                       % Change
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Product 1 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center">
                                                        <span class="w-1 h-1 rounded-full bg-blue-500 relative inline-block self-center mr-2"></span> Gross value
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                       $6,543.55
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                        <span class="focus:outline-none text-[12px] bg-green-100 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">+6.8</span>
                                                    </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center">
                                                        <span class="w-1 h-1 rounded-full bg-yellow-500 relative inline-block self-center mr-2"></span> Net volume from sales
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $3,654.21
                                                     </td>
                                                     <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                         <span class="focus:outline-none text-[12px] bg-blue-100 text-blue-700 dark:text-blue-600 rounded font-medium py-1 px-2">+4.5</span>
                                                     </td>
                                                </tr>
                                                <!-- Product 2 -->
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <td class="p-3 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white flex items-center">
                                                        <span class="w-1 h-1 rounded-full bg-pink-500 relative inline-block self-center mr-2"></span> Other
                                                    </td>
                                                    <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                        $563.20
                                                     </td>
                                                     <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400 text-right">
                                                         <span class="focus:outline-none text-[12px] bg-pink-100 text-pink-700 dark:text-pink-600 rounded font-medium py-1 px-2">-1.2</span>
                                                     </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:col-span-1  md:col-span-1 lg:col-span-1 xl:col-span-1 order-3 lg:order-2 xl:order-3">
                <div class="card w-full relative overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium">Top Dealer</h4>
                    </div>
                    <div class="card-body">
                        <div class="w-full">
                            <div class="flex items-center mb-2">
                                <div class="w-12 h-12 rounded">
                                    <img class="w-full h-full overflow-hidden object-cover rounded object-center" src="assets/images/users/avatar-3.jpg" alt="logo" />
                                </div>
                                <div class="ml-2">
                                    <a tabindex="0" class="cursor-pointer hover:text-gray-500 focus:text-gray-500 text-gray-800 dark:text-gray-100 focus:outline-none focus:underline"><h5 class=" font-medium text-base">Fitbit Incorporation</h5></a>
                                    <p tabindex="0" class="focus:outline-none text-gray-500 dark:text-gray-400 text-xs font-medium">San Diego, California</p>
                                </div>
                            </div>

                            <div class="grid gap-0 xl:gap-4 grid-cols-1 xs:grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-2 mt-2">
                                <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1 border-r-0 xs:border-r border-dashed dark:border-slate-700 border-b md:border-b-0 xl:border-b-0">
                                    <div class="p-4 text-center">
                                        <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">5,520</p>
                                        <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">Products Sold</h6>
                                    </div>
                                </div>
                                <div class="col-span-4 xs:col-span-1 sm:col-span-1 lg:col-span-2 xl:col-span-1">
                                    <div class="p-4 text-center">
                                        <p class="my-1 font-semibold text-2xl inline-block relative dark:text-slate-300">$36,880</p>
                                        <h6 class="uppercase text-slate-400 mt-2 text-xs font-semibold">Total Earning</h6>
                                    </div>
                                </div>
                            </div>
                            <div class=" mt-4">
                                <p class="text-sm font-semibold text-indigo-700 leading-none text-right pb-1">73%</p>
                            </div>
                            <div class="w-full h-2 relative bg-gray-200 dark:bg-gray-700 rounded-full">
                                <div class="h-2 w-60 bg-gradient-to-r from-blue-700 via-indigo-600 to-purple-600 rounded-full"></div>
                            </div>
                            <button class="focus:outline-none focus:bg-opacity-50 focus:text-black hover:text-black focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 text-indigo-700 dark:text-slate-300 dark:hover:text-slate-100 hover:bg-opacity-50 bg-gray-100 dark:bg-slate-700 text-sm font-medium py-3 w-full rounded mt-5">Send Message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end inner-grid-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-4 mb-4">
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card w-full relative overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium">Earnings Reports</h4>
                    </div>
                    <div class="flex flex-col card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Date
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Item Counts
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Tax
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Earning
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    03 March
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    50
                                                </td>
                                                <td class="p-3 text-sm text-red-500 whitespace-nowrap dark:text-red-400">
                                                   -$40
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                    $15,500.00
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    04 March
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    120
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                   -
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                    $20,900.00
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    05 March
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    90
                                                </td>
                                                <td class="p-3 text-sm text-red-500 whitespace-nowrap dark:text-red-400">
                                                   -$20
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                    $10,500.00
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    06 March
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    160
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                   -
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                    $35,000.00
                                                </td>
                                            </tr>
                                            <!-- 5 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    07 March
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    80
                                                </td>
                                                <td class="p-3 text-sm text-red-500 whitespace-nowrap dark:text-red-400">
                                                   -$60
                                                </td>
                                                <td class="p-3 text-sm font-medium text-gray-600 whitespace-nowrap dark:text-gray-400">
                                                    $18,880.00
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
            <div class="sm:col-span-1  md:col-span-2 lg:col-span-4 xl:col-span-1 ">
                <div class="h-full card w-full relative overflow-hidden">
                    <div class="card-header">
                        <h4 class="font-medium">Most Populer Products</h4>
                    </div>
                    <div class="flex flex-col  card-body">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Product
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Price
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Sell
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Status
                                                </th>
                                                <th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- 1 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/products/01.png" alt="" class="mr-2 h-5 inline-block">T-Wind Camera EDM 5D(White)
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    $50 <del class="text-gray-400">$90</del>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    450<small class="text-gray-400">(500)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <span class="focus:outline-none text-[12px] bg-green-100 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                    <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/products/02.png" alt="" class="mr-2 h-5 inline-block">T-Wind Shoes Max-Zon
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    $49 <del class="text-gray-400">$88</del>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    850<small class="text-gray-400">(900)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <span class="focus:outline-none text-[12px] bg-green-100 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                    <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                                                </td>
                                            </tr>
                                            <!-- 3 -->
                                            <tr class="bg-white border-b border-dashed dark:bg-gray-800 dark:border-gray-700">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/products/03.png" alt="" class="mr-2 h-5 inline-block">T-Wind VR 5D (Black)
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    $39 <del class="text-gray-400">$99</del>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    700<small class="text-gray-400">(700)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <span class="focus:outline-none text-[12px] bg-red-100 text-red-700 dark:text-red-600 rounded font-medium py-1 px-2">Sold</span>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                    <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                                                </td>
                                            </tr>
                                            <!-- 4 -->
                                            <tr class="bg-white dark:bg-gray-800">
                                                <td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
                                                    <img src="assets/images/products/04.png" alt="" class="mr-2 h-5 inline-block">T-Wind Mask N99 [ISI]
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    $5 <del class="text-gray-400">$9</del>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    1850<small class="text-gray-400">(2000)</small>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <span class="focus:outline-none text-[12px] bg-green-100 text-green-700 dark:text-green-600 rounded font-medium py-1 px-2">Stock</span>
                                                </td>
                                                <td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                    <a href="#"><i class="ti ti-edit text-lg text-gray-500 dark:text-gray-400"></i></a>
                                                    <a href="#"><i class="ti ti-trash text-lg text-red-500 dark:text-red-400"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!--end inner-grid-->
            </div>
        </div>
        <!-- footer -->
        <div class="absolute bottom-0 left-2 right-2 block print:hidden">
          <div class="container mx-auto">
            <!-- Footer Start -->
            <footer
              class="footer mt-4 rounded-tr-md rounded-tl-md bg-white dark:bg-slate-800 p-4 text-center font-medium text-slate-600 dark:text-slate-400 shadow md:text-left"
            >
              &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              T-Wind
              <span class="float-right hidden text-slate-600 dark:text-slate-400 md:inline-block"
                >Crafted with <i class="ti ti-heart text-red-500"></i> by
                Mannatthemes</span
              >
            </footer>
            <!-- end Footer -->
          </div>
        </div>


    </div><!--end container-->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ecommerce-index.init.js') }}"></script>

</x-app-layout>

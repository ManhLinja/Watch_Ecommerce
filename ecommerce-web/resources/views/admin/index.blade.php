@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'BẢNG ĐIỀU KHIỂN'])
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <div style="height: 600px;">
                                <!--Please remove the height before using this page-->
                                
                            </div>
                        </div>
                    </div> --}}
                    <div class="row mt-3">
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="card">
                                <div class="card-body card-block p-3" style="position: relative;">
                                    <div class="media align-items-center">
                                        <div class="media-body text-left">
                                            <p class="text-white mb-0">Tổng Đơn hàng</p>
                                            <h5 class="text-white mb-0">{{ $order_count }}</h5>
                                        </div>
                                        <div class="w-icon"><i class="zmdi zmdi-shopping-basket text-white"></i></div>
                                    </div>
                                    {{-- <div id="chart1" class="mt-1" style="min-height: 35px;">
                                        <div id="apexchartsuk9zxk6ai" class="apexcharts-canvas apexchartsuk9zxk6ai light" style="width: 129px; height: 35px;">
                                            <svg
                                                id="SvgjsSvg1515"
                                                width="129"
                                                height="35"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1517" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1516">
                                                        <clipPath id="gridRectMaskuk9zxk6ai">
                                                            <rect id="SvgjsRect1522" width="131.5" height="37.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskuk9zxk6ai">
                                                            <rect id="SvgjsRect1523" width="131" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1529" x1="0" y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1530" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop1531" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1532" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <filter id="SvgjsFilter1535" filterUnits="userSpaceOnUse">
                                                            <feFlood id="SvgjsFeFlood1536" flood-color="#000000" flood-opacity="0.12" result="SvgjsFeFlood1536Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1537" in="SvgjsFeFlood1536Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1537Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1538" dx="1" dy="1" result="SvgjsFeOffset1538Out" in="SvgjsFeComposite1537Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1539" stdDeviation="2 " result="SvgjsFeGaussianBlur1539Out" in="SvgjsFeOffset1538Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1540" result="SvgjsFeMerge1540Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1541" in="SvgjsFeGaussianBlur1539Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1542" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1543" in="SourceGraphic" in2="SvgjsFeMerge1540Out" mode="normal" result="SvgjsFeBlend1543Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1521"
                                                        x1="0"
                                                        y1="0"
                                                        x2="0"
                                                        y2="35"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs"
                                                        x="0"
                                                        y="0"
                                                        width="1"
                                                        height="35"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1544" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1545" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g>
                                                    <g id="SvgjsG1548" class="apexcharts-grid">
                                                        <line id="SvgjsLine1550" x1="0" y1="35" x2="129" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1549" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1525" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1526" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="undefined-0"
                                                                d="M 0 22.5L 14.333333333333334 2L 28.666666666666668 14.5L 43 5.5L 57.333333333333336 22.5L 71.66666666666667 13L 86 29L 100.33333333333333 17L 114.66666666666667 30.5L 129 24.5"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="url(#SvgjsLinearGradient1529)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2.5"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMaskuk9zxk6ai)"
                                                                filter="url(#SvgjsFilter1535)"
                                                                pathTo="M 0 22.5L 14.333333333333334 2L 28.666666666666668 14.5L 43 5.5L 57.333333333333336 22.5L 71.66666666666667 13L 86 29L 100.33333333333333 17L 114.66666666666667 30.5L 129 24.5"
                                                                pathFrom="M -1 35L -1 35L 14.333333333333334 35L 28.666666666666668 35L 43 35L 57.333333333333336 35L 71.66666666666667 35L 86 35L 100.33333333333333 35L 114.66666666666667 35L 129 35"
                                                            ></path>
                                                            <g id="SvgjsG1527" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1556"
                                                                        r="0"
                                                                        cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker wyvvidpvu no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#ffffff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1528" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1551" x1="0" y1="0" x2="129" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1552" x1="0" y1="0" x2="129" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1553" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1554" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1555" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1520" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1546" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1547" class="apexcharts-yaxis-texts-g"></g></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="resize-triggers">
                                        <div class="expand-trigger"><div style="width: 162px; height: 117px;"></div></div>
                                        <div class="contract-trigger"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="card">
                                <div class="card-body card-block p-3" style="position: relative;">
                                    <div class="media align-items-center">
                                        <div class="media-body text-left">
                                            <p class="text-white mb-0">Khách hàng</p>
                                            <h5 class="text-white mb-0">{{ $customer }}</h5>
                                        </div>
                                        <div class="w-icon"><i class="zmdi zmdi-accounts-alt text-white"></i></div>
                                    </div>
                                    {{-- <div id="chart2" class="mt-1" style="min-height: 35px;">
                                        <div id="apexchartsf5dqpv72" class="apexcharts-canvas apexchartsf5dqpv72 light" style="width: 129px; height: 35px;">
                                            <svg
                                                id="SvgjsSvg1560"
                                                width="129"
                                                height="35"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1562" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1561">
                                                        <clipPath id="gridRectMaskf5dqpv72">
                                                            <rect id="SvgjsRect1567" width="131.5" height="37.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMaskf5dqpv72">
                                                            <rect id="SvgjsRect1568" width="131" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1574" x1="0" y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1575" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop1576" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1577" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <filter id="SvgjsFilter1580" filterUnits="userSpaceOnUse">
                                                            <feFlood id="SvgjsFeFlood1581" flood-color="#000000" flood-opacity="0.12" result="SvgjsFeFlood1581Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1582" in="SvgjsFeFlood1581Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1582Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1583" dx="1" dy="1" result="SvgjsFeOffset1583Out" in="SvgjsFeComposite1582Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1584" stdDeviation="2 " result="SvgjsFeGaussianBlur1584Out" in="SvgjsFeOffset1583Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1585" result="SvgjsFeMerge1585Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1586" in="SvgjsFeGaussianBlur1584Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1587" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1588" in="SourceGraphic" in2="SvgjsFeMerge1585Out" mode="normal" result="SvgjsFeBlend1588Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1566"
                                                        x1="0"
                                                        y1="0"
                                                        x2="0"
                                                        y2="35"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs"
                                                        x="0"
                                                        y="0"
                                                        width="1"
                                                        height="35"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1589" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1590" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g>
                                                    <g id="SvgjsG1593" class="apexcharts-grid">
                                                        <line id="SvgjsLine1595" x1="0" y1="35" x2="129" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1594" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1570" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1571" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="undefined-0"
                                                                d="M 0 29L 14.333333333333334 28L 28.666666666666668 34L 43 11.5L 57.333333333333336 19L 71.66666666666667 13L 86 28L 100.33333333333333 7.5L 114.66666666666667 14.5L 129 0.5"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="url(#SvgjsLinearGradient1574)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2.5"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMaskf5dqpv72)"
                                                                filter="url(#SvgjsFilter1580)"
                                                                pathTo="M 0 29L 14.333333333333334 28L 28.666666666666668 34L 43 11.5L 57.333333333333336 19L 71.66666666666667 13L 86 28L 100.33333333333333 7.5L 114.66666666666667 14.5L 129 0.5"
                                                                pathFrom="M -1 35L -1 35L 14.333333333333334 35L 28.666666666666668 35L 43 35L 57.333333333333336 35L 71.66666666666667 35L 86 35L 100.33333333333333 35L 114.66666666666667 35L 129 35"
                                                            ></path>
                                                            <g id="SvgjsG1572" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1601"
                                                                        r="0"
                                                                        cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker w78k5yp7z no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#ffffff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1573" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1596" x1="0" y1="0" x2="129" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1597" x1="0" y1="0" x2="129" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1598" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1599" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1600" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1565" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1591" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1592" class="apexcharts-yaxis-texts-g"></g></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger"><div style="width: 162px; height: 117px;"></div></div>
                                        <div class="contract-trigger"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="card">
                                <div class="card-body card-block p-3" style="position: relative;">
                                    <div class="media align-items-center">
                                        <div class="media-body text-left">
                                            <p class="text-white mb-0">Doanh số</p>
                                            <h5 class="text-white mb-0">${{ $revenue }}</h5>
                                        </div>
                                        <div class="w-icon"><i class="zmdi zmdi-balance-wallet text-white"></i></div>
                                    </div>
                                    {{-- <div id="chart3" class="mt-1" style="min-height: 35px;">
                                        <div id="apexcharts9ti1lplr" class="apexcharts-canvas apexcharts9ti1lplr light" style="width: 129px; height: 35px;">
                                            <svg
                                                id="SvgjsSvg1605"
                                                width="129"
                                                height="35"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1607" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1606">
                                                        <clipPath id="gridRectMask9ti1lplr">
                                                            <rect id="SvgjsRect1612" width="131.5" height="37.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask9ti1lplr">
                                                            <rect id="SvgjsRect1613" width="131" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1619" x1="0" y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1620" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop1621" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1622" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <filter id="SvgjsFilter1625" filterUnits="userSpaceOnUse">
                                                            <feFlood id="SvgjsFeFlood1626" flood-color="#000000" flood-opacity="0.12" result="SvgjsFeFlood1626Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1627" in="SvgjsFeFlood1626Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1627Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1628" dx="1" dy="1" result="SvgjsFeOffset1628Out" in="SvgjsFeComposite1627Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1629" stdDeviation="2 " result="SvgjsFeGaussianBlur1629Out" in="SvgjsFeOffset1628Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1630" result="SvgjsFeMerge1630Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1631" in="SvgjsFeGaussianBlur1629Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1632" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1633" in="SourceGraphic" in2="SvgjsFeMerge1630Out" mode="normal" result="SvgjsFeBlend1633Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1611"
                                                        x1="0"
                                                        y1="0"
                                                        x2="0"
                                                        y2="35"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs"
                                                        x="0"
                                                        y="0"
                                                        width="1"
                                                        height="35"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1634" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1635" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g>
                                                    <g id="SvgjsG1638" class="apexcharts-grid">
                                                        <line id="SvgjsLine1640" x1="0" y1="35" x2="129" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1639" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1615" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1616" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="undefined-0"
                                                                d="M 0 16.5L 14.333333333333334 17.5L 28.666666666666668 3L 43 24L 57.333333333333336 12L 71.66666666666667 24.5L 86 18L 100.33333333333333 23.5L 114.66666666666667 17.5L 129 30.5"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="url(#SvgjsLinearGradient1619)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2.5"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMask9ti1lplr)"
                                                                filter="url(#SvgjsFilter1625)"
                                                                pathTo="M 0 16.5L 14.333333333333334 17.5L 28.666666666666668 3L 43 24L 57.333333333333336 12L 71.66666666666667 24.5L 86 18L 100.33333333333333 23.5L 114.66666666666667 17.5L 129 30.5"
                                                                pathFrom="M -1 40L -1 40L 14.333333333333334 40L 28.666666666666668 40L 43 40L 57.333333333333336 40L 71.66666666666667 40L 86 40L 100.33333333333333 40L 114.66666666666667 40L 129 40"
                                                            ></path>
                                                            <g id="SvgjsG1617" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1646"
                                                                        r="0"
                                                                        cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker whzoq1mlb no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#ffffff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1618" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1641" x1="0" y1="0" x2="129" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1642" x1="0" y1="0" x2="129" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1643" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1644" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1645" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1610" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1636" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1637" class="apexcharts-yaxis-texts-g"></g></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip dark">
                                                <div class="apexcharts-tooltip-series-group">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger"><div style="width: 162px; height: 117px;"></div></div>
                                        <div class="contract-trigger"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                            <div class="card">
                                <div class="card-body card-block p-3" style="position: relative;">
                                    <div class="media align-items-center">
                                        <div class="media-body text-left">
                                            <p class="text-white mb-0">Tăng trưởng</p>
                                            <h5 class="text-white mb-0">41.86%</h5>
                                        </div>
                                        <div class="w-icon"><i class="zmdi zmdi-chart-donut text-white"></i></div>
                                    </div>
                                    {{-- <div id="chart4" class="mt-1" style="min-height: 35px;">
                                        <div id="apexcharts8ah1c0g3" class="apexcharts-canvas apexcharts8ah1c0g3 light" style="width: 129px; height: 35px;">
                                            <svg
                                                id="SvgjsSvg1650"
                                                width="129"
                                                height="35"
                                                xmlns="http://www.w3.org/2000/svg"
                                                version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)"
                                                style="background: transparent;"
                                            >
                                                <g id="SvgjsG1652" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1651">
                                                        <clipPath id="gridRectMask8ah1c0g3">
                                                            <rect id="SvgjsRect1657" width="131.5" height="37.5" x="-1.25" y="-1.25" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask8ah1c0g3">
                                                            <rect id="SvgjsRect1658" width="131" height="37" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1664" x1="0" y1="1" x2="1" y2="1">
                                                            <stop id="SvgjsStop1665" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop1666" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1667" stop-opacity="1" stop-color="rgba(255,255,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <filter id="SvgjsFilter1670" filterUnits="userSpaceOnUse">
                                                            <feFlood id="SvgjsFeFlood1671" flood-color="#000000" flood-opacity="0.12" result="SvgjsFeFlood1671Out" in="SourceGraphic"></feFlood>
                                                            <feComposite id="SvgjsFeComposite1672" in="SvgjsFeFlood1671Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1672Out"></feComposite>
                                                            <feOffset id="SvgjsFeOffset1673" dx="1" dy="1" result="SvgjsFeOffset1673Out" in="SvgjsFeComposite1672Out"></feOffset>
                                                            <feGaussianBlur id="SvgjsFeGaussianBlur1674" stdDeviation="2 " result="SvgjsFeGaussianBlur1674Out" in="SvgjsFeOffset1673Out"></feGaussianBlur>
                                                            <feMerge id="SvgjsFeMerge1675" result="SvgjsFeMerge1675Out" in="SourceGraphic">
                                                                <feMergeNode id="SvgjsFeMergeNode1676" in="SvgjsFeGaussianBlur1674Out"></feMergeNode>
                                                                <feMergeNode id="SvgjsFeMergeNode1677" in="[object Arguments]"></feMergeNode>
                                                            </feMerge>
                                                            <feBlend id="SvgjsFeBlend1678" in="SourceGraphic" in2="SvgjsFeMerge1675Out" mode="normal" result="SvgjsFeBlend1678Out"></feBlend>
                                                        </filter>
                                                    </defs>
                                                    <line
                                                        id="SvgjsLine1656"
                                                        x1="71.16666666666667"
                                                        y1="0"
                                                        x2="71.16666666666667"
                                                        y2="35"
                                                        stroke="#b6b6b6"
                                                        stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs"
                                                        x="71.16666666666667"
                                                        y="0"
                                                        width="1"
                                                        height="35"
                                                        fill="#b1b9c4"
                                                        filter="none"
                                                        fill-opacity="0.9"
                                                        stroke-width="1"
                                                    ></line>
                                                    <g id="SvgjsG1679" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1680" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g>
                                                    <g id="SvgjsG1683" class="apexcharts-grid">
                                                        <line id="SvgjsLine1685" x1="0" y1="35" x2="129" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1684" x1="0" y1="1" x2="0" y2="35" stroke="transparent" stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1660" class="apexcharts-line-series apexcharts-plot-series">
                                                        <g id="SvgjsG1661" class="apexcharts-series" seriesName="Orders" data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path
                                                                id="undefined-0"
                                                                d="M 0 32.5L 14.333333333333334 2.5L 28.666666666666668 16.5L 43 7.5L 57.333333333333336 33L 71.66666666666667 24L 86 30.5L 100.33333333333333 13L 114.66666666666667 18L 129 9.5"
                                                                fill="none"
                                                                fill-opacity="1"
                                                                stroke="url(#SvgjsLinearGradient1664)"
                                                                stroke-opacity="1"
                                                                stroke-linecap="butt"
                                                                stroke-width="2.5"
                                                                stroke-dasharray="0"
                                                                class="apexcharts-line"
                                                                index="0"
                                                                clip-path="url(#gridRectMask8ah1c0g3)"
                                                                filter="url(#SvgjsFilter1670)"
                                                                pathTo="M 0 32.5L 14.333333333333334 2.5L 28.666666666666668 16.5L 43 7.5L 57.333333333333336 33L 71.66666666666667 24L 86 30.5L 100.33333333333333 13L 114.66666666666667 18L 129 9.5"
                                                                pathFrom="M -1 40L -1 40L 14.333333333333334 40L 28.666666666666668 40L 43 40L 57.333333333333336 40L 71.66666666666667 40L 86 40L 100.33333333333333 40L 114.66666666666667 40L 129 40"
                                                            ></path>
                                                            <g id="SvgjsG1662" class="apexcharts-series-markers-wrap">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle
                                                                        id="SvgjsCircle1691"
                                                                        r="0"
                                                                        cx="71.66666666666667"
                                                                        cy="24"
                                                                        class="apexcharts-marker worvvemfr no-pointer-events"
                                                                        stroke="#ffffff"
                                                                        fill="#ffffff"
                                                                        fill-opacity="1"
                                                                        stroke-width="2"
                                                                        stroke-opacity="0.9"
                                                                        default-marker-size="0"
                                                                    ></circle>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1663" class="apexcharts-datalabels"></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1686" x1="0" y1="0" x2="129" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1687" x1="0" y1="0" x2="129" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1688" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1689" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1690" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <rect id="SvgjsRect1655" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                                <g id="SvgjsG1681" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1682" class="apexcharts-yaxis-texts-g"></g></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip dark" style="left: -20px; top: 2px;">
                                                <div class="apexcharts-tooltip-series-group active" style="display: flex;">
                                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span>
                                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Orders: </span><span class="apexcharts-tooltip-text-value">32</span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger"><div style="width: 162px; height: 117px;"></div></div>
                                        <div class="contract-trigger"></div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <form autocomplete="off" method="GET" action="" class="form-inline" style="margin-left:15px;">
                            {{-- @csrf --}}
                            <div>
                                Từ ngày: <input type="text" id="datepicker" name="date_from" class="form-control">
                            </div>
                            <div style="margin-left:15px;">
                                Đến ngày: <input type="text" id="datepicker2" name="date_to" class="form-control">
                            </div>
                            <div class="btn-group mx-3">
                                <button type="submit" id="btn-dashboard-filter" class="btn btn-light">Lọc dữ liệu</button>
                            </div>
                            <div class=" mx-3">
                                @if ($count_order)
                                    Số đơn hàng: {{ $count_order }}
                                @endif
                            </div>
                            <div class=" mx-3">
                                @if ($revenue_from_to)
                                    Doanh thu: {{ $revenue_from_to }}
                                @endif
                            </div>
                        </form>
                        {{-- <div id="myfirstchart" style="height: 250px;"></div> --}}
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bảng thống kê hóa đơn</h5>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Mã hóa đơn</th>
                                                    <th scope="col">Người mua</th>
                                                    <th scope="col">Tổng tiền</th>
                                                    <th scope="col">Ngày xuất hóa đơn</th>
                                                    <th class="text-right" scope="col">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($collection as $item)
                                                    
                                                
                                                <tr>
                                                    <th scope="row">{{ $item->id }}</th>
                                                    <td>{{ $item->invoice_id }}</td>
                                                    <td>{{ $item->cus->username}}</td>
                                                    <td>${{ $item->total }}</td>
                                                    <td>{{ $item->invoice_date }}</td>
                                                    <td>
                                                        <div class="text-right">
                                                            <a type="button" href="{{ route('admin_view',$item->id) }}" class="btn btn-light waves-effect waves-light m-1">
                                                                <i class="fa fa-eye"></i> <span>Xem chi tiết</span> 
                                                           </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="cart-footer">
                                    {{ $collection->appends(request()->all())->links() }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    <!--start overlay-->
                    <div class="overlay"></div>
                    <!--end overlay-->
                </div>
                <!-- End container-fluid-->
            </div>
            <!--End content-wrapper-->
@endsection
            

<template>
<user-layout>
  <div class="container-fluid" >
    <!-- Page header section  -->
    <div class="block-header">
      <div class="row clearfix">
        <div class="col-lg-4 col-md-12 col-sm-12">
          <h1>Hi, Welcomeback!</h1>
          <span>JustDo Dashboard,</span>
        </div>
        <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
          <div
            class="
              d-flex
              align-items-center
              justify-content-lg-end
              mt-4 mt-lg-0
              flex-wrap
              vivify
              pullUp
              delay-550
            "
          >
            <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
              <p class="text-muted mb-1">
                Purchases
                <span id="mini-bar-chart3" class="mini-bar-chart"></span>
              </p>
              <h5 class="mb-0">289</h5>
            </div>
            <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
              <p class="text-muted mb-1">
                Today’s profit
                <span id="mini-bar-chart2" class="mini-bar-chart"></span>
              </p>
              <h5 class="mb-0">$541</h5>
            </div>
            <div class="mb-3 mb-xl-0">
              <p class="text-muted mb-1">
                Balance
                <span id="mini-bar-chart1" class="mini-bar-chart"></span>
              </p>
              <h5 class="mb-0">$98M</h5>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
                <div class="body small_state">
                    <div class="details">
                        <span class="mb-0">Population</span>
                        <h5 class="mb-0">614</h5>
                    </div>
                    <div class="state_chart">
                        <span class="chart_1">5,2,3,6,9,8,4,1,2,8</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
                <div class="body small_state">
                    <div class="details">
                        <span class="mb-0">Page Views</span>
                        <h5 class="mb-0">3,025</h5>
                    </div>
                    <div class="state_chart">
                        <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
                <div class="body small_state">
                    <div class="details">
                        <span class="mb-0">Growth</span>
                        <h5 class="mb-0">$35M</h5>
                    </div>
                    <div class="state_chart">
                        <span class="chart_4">4:4, 5:1, 3:5, 8:3, 5:10, 6:10, 8:2, 5:3, 2:3</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card">
                <div class="body small_state">
                    <div class="details">
                        <span class="mb-0">Usage</span>
                        <h5 class="mb-0">98%</h5>
                    </div>
                    <div class="state_chart">
                        <span class="chart_2">9,5,1,3,5,7,8,5,2,4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12">
                            <!-- <div id="world-map-markers" class="jvector-map" style="height: 305px"></div> -->
                            <div id="chartdiv"></div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" title="">Australia</a>
                                                <p class="mb-0">Scott Ortega</p>
                                            </td>
                                            <td>
                                                <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                <small class="font-12 text-muted">Total Orders</small>
                                            </td>
                                            <td>
                                                <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Returns</small>
                                            </td>
                                            <td>
                                                <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Earnings</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="">Canada</a>
                                                <p class="mb-0">Scott Ortega</p>
                                            </td>
                                            <td>
                                                <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                <small class="font-12 text-muted">Total Orders</small>
                                            </td>
                                            <td>
                                                <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Returns</small>
                                            </td>
                                            <td>
                                                <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Earnings</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="">France</a>
                                                <p class="mb-0">Scott Ortega</p>
                                            </td>
                                            <td>
                                                <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                <small class="font-12 text-muted">Total Orders</small>
                                            </td>
                                            <td>
                                                <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Returns</small>
                                            </td>
                                            <td>
                                                <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Earnings</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="">USA</a>
                                                <p class="mb-0">Scott Ortega</p>
                                            </td>
                                            <td>
                                                <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                <small class="font-12 text-muted">Total Orders</small>
                                            </td>
                                            <td>
                                                <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Returns</small>
                                            </td>
                                            <td>
                                                <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Earnings</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" title="">Netherlands</a>
                                                <p class="mb-0">Scott Ortega</p>
                                            </td>
                                            <td>
                                                <div>231K <span class="text-red font-10">4% <i class="fa fa-level-down"></i></span></div>
                                                <small class="font-12 text-muted">Total Orders</small>
                                            </td>
                                            <td>
                                                <div>21K <span class="text-green font-10">3% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Returns</small>
                                            </td>
                                            <td>
                                                <div>21M <span class="text-green font-10">8% <i class="fa fa-level-up"></i></span></div>
                                                <small class="font-12 text-muted">Total Earnings</small>
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
    <div class="row clearfix">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
              <img class="card-img-top" :src="'/storage/images/image-gallery/1.jpg'" alt="Card image cap">
              <div class="body">
                  <h4 class="card-title">Card title</h4>
                  <div class="card-subtitle">Lorem ipsum dolor sit amet.</div>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="javascript:void(0)" class="btn btn-primary theme-bg gradient">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
              <img class="card-img-top" :src="'/storage/images/image-gallery/1.jpg'" alt="Card image cap">
              <div class="body">
                  <h4 class="card-title">Card title</h4>
                  <div class="card-subtitle">Lorem ipsum dolor sit amet.</div>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="javascript:void(0)" class="btn btn-primary theme-bg gradient">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
              <img class="card-img-top" :src="'/storage/images/image-gallery/1.jpg'" alt="Card image cap">
              <div class="body">
                  <h4 class="card-title">Card title</h4>
                  <div class="card-subtitle">Lorem ipsum dolor sit amet.</div>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="javascript:void(0)" class="btn btn-primary theme-bg gradient">Go somewhere</a>
              </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card">
              <img class="card-img-top" :src="'/storage/images/image-gallery/1.jpg'" alt="Card image cap">
              <div class="body">
                  <h4 class="card-title">Card title</h4>
                  <div class="card-subtitle">Lorem ipsum dolor sit amet.</div>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="javascript:void(0)" class="btn btn-primary theme-bg gradient">Go somewhere</a>
              </div>
          </div>
        </div>
    </div>
  </div>
</user-layout>
</template>

<script>
import UserLayout from '@/Layouts/UserLayout';

import * as am4core from "@amcharts/amcharts4/core";
import * as am4maps from "@amcharts/amcharts4/maps";
import am4geodata_worldLow from "@amcharts/amcharts4-geodata/worldLow";

export default{
    layout:UserLayout,
    mounted() {
        function myFunction(ev) {
            location.href = "chart/"    //+ev.target.dataItem.dataContext.name;
        }
        let map = am4core.create("chartdiv", am4maps.MapChart)
        map.geodata = am4geodata_worldLow
        map.projection = new am4maps.projections.Miller()

        var polygonSeries = map.series.push(new am4maps.MapPolygonSeries())
        polygonSeries.exclude = ["AQ"];
        polygonSeries.useGeodata = true

        // Configure series
        let polygonTemplate = polygonSeries.mapPolygons.template;
        polygonTemplate.tooltipText = "{name}";
        polygonTemplate.fill = am4core.color('#6610f2');

        polygonTemplate.events.on("hit", myFunction, this);


        // Create hover state and set alternative fill color
        let hs = polygonTemplate.states.create("hover");
        hs.properties.fill = am4core.color("#4ade26")

        // polygonSeries.include = ["PT", "ES", "FR", "DE", "BE", "NL", "IT", "AT", "GB", "IE", "CH", "LU"];
        // polygonSeries.data = JSON.parse(JSON.stringify(dataArray));

        polygonTemplate.tooltipText = "{name}: {value}";

        // polygonSeries.data = [{
        //     "id": "US",
        //     "name": "United States",
        //     "value": 100,
        //     "fill": am4core.color("#F05C5C")
        // }, {
        //     "id": "FR",
        //     "name": "France",
        //     "value": 50,
        //     "fill": am4core.color("#5C5CFF")
        // }];

        // polygonTemplate.propertyFields.fill = "fill";

        map.smallMap = new am4maps.SmallMap();
        map.smallMap.series.push(polygonSeries);

        map.smallMap.background.fill = am4core.isColor('var(--card-color)')
        map.smallMap.background.strokeOpacity = 1;
        map.smallMap.background.fillOpacity = 0.9;

        map.smallMap.align = "right";
        map.smallMap.valign = "top";


        map.zoomControl = new am4maps.ZoomControl();

        polygonSeries.heatRules.push({
            "property": "fill",
            "target": polygonSeries.mapPolygons.template,
            "min": am4core.color("#F05C5C"),
            "max": am4core.color("#4ade26")
        });

        map.panBehavior = "rotateLongLat";
        // Add expectancy data
        polygonSeries.data = [
            { id: "AF", value: 60.524 },
            { id: "AL", value: 77.185 },
            { id: "DZ", value: 70.874 },
            { id: "AO", value: 51.498 },
            { id: "AR", value: 76.128 },
            { id: "AM", value: 74.469 },
            { id: "AU", value: 82.364 },
            { id: "AT", value: 80.965 },
            { id: "AZ", value: 70.686 },
            { id: "BH", value: 76.474 },
            { id: "BD", value: 70.258 },
            { id: "BY", value: 69.829 },
            { id: "BE", value: 80.373 },
            { id: "BJ", value: 59.165 },
            { id: "BT", value: 67.888 },
            { id: "BO", value: 66.969 },
            { id: "BA", value: 76.211 },
            { id: "BW", value: 47.152 },
            { id: "BR", value: 73.667 },
            { id: "BN", value: 78.35 },
            { id: "BG", value: 73.448 },
            { id: "BF", value: 55.932 },
            { id: "BI", value: 53.637 },
            { id: "KH", value: 71.577 },
            { id: "CM", value: 54.61 },
            { id: "CA", value: 81.323 },
            { id: "CV", value: 74.771 },
            { id: "CF", value: 49.517 },
            { id: "TD", value: 50.724 },
            { id: "CL", value: 79.691 },
            { id: "CN", value: 75.178 },
            { id: "CO", value: 73.835 },
            { id: "KM", value: 60.661 },
            { id: "CD", value: 49.643 },
            { id: "CG", value: 58.32 },
            { id: "CR", value: 79.712 },
            { id: "CI", value: 50.367 },
            { id: "HR", value: 76.881 },
            { id: "CU", value: 79.088 },
            { id: "CY", value: 79.674 },
            { id: "CZ", value: 77.552 },
            { id: "DK", value: 79.251 },
            { id: "GL", value: 79.251 },
            { id: "DJ", value: 61.319 },
            { id: "DO", value: 73.181 },
            { id: "EC", value: 76.195 },
            { id: "EG", value: 70.933 },
            { id: "SV", value: 72.361 },
            { id: "GQ", value: 52.562 },
            { id: "ER", value: 62.329 },
            { id: "EE", value: 74.335 },
            { id: "ET", value: 62.983 },
            { id: "FJ", value: 69.626 },
            { id: "FI", value: 80.362 },
            { id: "FR", value: 81.663 },
            { id: "GA", value: 63.115 },
            { id: "GF", value: 79.9 },
            { id: "GM", value: 58.59 },
            { id: "GE", value: 74.162 },
            { id: "DE", value: 80.578 },
            { id: "GH", value: 60.979 },
            { id: "GR", value: 80.593 },
            { id: "GT", value: 71.77 },
            { id: "GN", value: 55.865 },
            { id: "GW", value: 54.054 },
            { id: "GY", value: 66.134 },
            { id: "HT", value: 62.746 },
            { id: "HN", value: 73.503 },
            { id: "HK", value: 83.199 },
            { id: "HU", value: 74.491 },
            { id: "IS", value: 81.96 },
            { id: "IN", value: 66.168 },
            { id: "ID", value: 70.624 },
            { id: "IR", value: 73.736 },
            { id: "IQ", value: 69.181 },
            { id: "IE", value: 80.531 },
            { id: "IL", value: 81.641 },
            { id: "IT", value: 82.235 },
            { id: "JM", value: 73.338 },
            { id: "JP", value: 83.418 },
            { id: "JO", value: 73.7 },
            { id: "KZ", value: 66.394 },
            { id: "KE", value: 61.115 },
            { id: "KP", value: 69.701 },
            { id: "KR", value: 81.294 },
            { id: "KW", value: 74.186 },
            { id: "KG", value: 67.37 },
            { id: "LA", value: 67.865 },
            { id: "LV", value: 72.045 },
            { id: "LB", value: 79.716 },
            { id: "LS", value: 48.947 },
            { id: "LR", value: 60.23 },
            { id: "LY", value: 75.13 },
            { id: "LT", value: 71.942 },
            { id: "LU", value: 80.371 },
            { id: "MK", value: 75.041 },
            { id: "MG", value: 64.28 },
            { id: "MW", value: 54.798 },
            { id: "MY", value: 74.836 },
            { id: "ML", value: 54.622 },
            { id: "MR", value: 61.39 },
            { id: "MU", value: 73.453 },
            { id: "MX", value: 77.281 },
            { id: "MD", value: 68.779 },
            { id: "MN", value: 67.286 },
            { id: "ME", value: 74.715 },
            { id: "MA", value: 70.714 },
            { id: "EH", value: 70.714 },
            { id: "MZ", value: 49.91 },
            { id: "MM", value: 65.009 },
            { id: "NA", value: 64.014 },
            { id: "NP", value: 67.989 },
            { id: "NL", value: 80.906 },
            { id: "NZ", value: 80.982 },
            { id: "NI", value: 74.515 },
            { id: "NE", value: 57.934 },
            { id: "NG", value: 52.116 },
            { id: "NO", value: 81.367 },
            { id: "SJ", value: 81.367 },
            { id: "OM", value: 76.287 },
            { id: "PK", value: 66.42 },
            { id: "PA", value: 77.342 },
            { id: "PG", value: 62.288 },
            { id: "PY", value: 72.181 },
            { id: "PE", value: 74.525 },
            { id: "PH", value: 68.538 },
            { id: "PL", value: 76.239 },
            { id: "PT", value: 79.732 },
            { id: "QA", value: 78.231 },
            { id: "RO", value: 73.718 },
            { id: "RU", value: 67.874 },
            { id: "RW", value: 63.563 },
            { id: "SA", value: 75.264 },
            { id: "SN", value: 63.3 },
            { id: "RS", value: 73.934 },
            { id: "SL", value: 45.338 },
            { id: "SG", value: 82.155 },
            { id: "SK", value: 75.272 },
            { id: "SI", value: 79.444 },
            { id: "SB", value: 67.465 },
            { id: "SO", value: 54 },
            { id: "ZA", value: 56.271 },
            { id: "SS", value: 54.666 },
            { id: "ES", value: 81.958 },
            { id: "LK", value: 74.116 },
            { id: "SD", value: 61.875 },
            { id: "SR", value: 70.794 },
            { id: "SZ", value: 48.91 },
            { id: "SE", value: 81.69 },
            { id: "CH", value: 82.471 },
            { id: "SY", name:"syory", value: 71 },
            { id: "TW", value: 79.45 },
            { id: "TJ", value: 67.118 },
            { id: "TZ", value: 60.885 },
            { id: "TH", value: 74.225 },
            { id: "TL", value: 67.033 },
            { id: "TG", value: 56.198 },
            { id: "TT", value: 69.761 },
            { id: "TN", value: 75.632 },
            { id: "TR", value: 74.938 },
            { id: "TM", value: 65.299 },
            { id: "UG", value: 58.668 },
            { id: "UA", value: 68.414 },
            { id: "AE", value: 76.671 },
            { id: "GB", value: 80.396 },
            { id: "US", value: 78.797 },
            { id: "UY", value: 77.084 },
            { id: "UZ", value: 68.117 },
            { id: "VE", value: 74.477 },
            { id: "PS", value: 73.018 },
            { id: "VN", value: 75.793 },
            { id: "YE", value: 62.923 },
            { id: "ZM", value: 57.037 },
            { id: "ZW", value: 58.142 }
        ];

    },
    beforeDestroy() {
        if (this.map) {
            this.map.dispose()
        }
    }
};
</script>

<style scoped>
#chartdiv {
  width: 100%;
  height: 325px;
}
</style>

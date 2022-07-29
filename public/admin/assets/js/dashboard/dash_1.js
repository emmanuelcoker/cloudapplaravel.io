try {

  /*
      ==============================
      |    @Options Charts Script   |
      ==============================
  */
  
  /*
      =============================
          Daily Sales | Options
      =============================
  */
  var d_2options1 = {
    chart: {
          height: 160,
          type: 'bar',
          stacked: true,
          toolbar: {
            show: false,
          }
      },
      dataLabels: {
          enabled: false,
      },
      stroke: {
          show: true,
          width: 1,
      },
      colors: ['#2090f8', '#e0e6ed'],
      responsive: [{
          breakpoint: 480,
          options: {
              legend: {
                  position: 'bottom',
                  offsetX: -10,
                  offsetY: 0
              }
          }
      }],
      series: [{
          name: 'Videos',
          data: [44, 55, 41, 67, 22, 43, 21]
      },{
          name: 'Images',
          data: [13, 23, 20, 8, 13, 27, 33]
      }],
      xaxis: {
          labels: {
              show: false,
          },
          categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
      },
      yaxis: {
          show: false
      },
      fill: {
          opacity: 1
      },
      plotOptions: {
          bar: {
              horizontal: false,
              startingShape: 'rounded',
              endingShape: 'rounded',
              columnWidth: '25%',
              
          }
      },
      legend: {
          show: false,
      },
      grid: {
          show: false,
          xaxis: {
              lines: {
                  show: false
              }
          },
          padding: {
            top: 10,
            right: 0,
            bottom: -40,
            left: 0
          }, 
      },
  }
  
  /*
      =============================
          Total Orders | Options
      =============================
  */ 
  var d_2options2 = {
    chart: {
      id: 'sparkline1',
      group: 'sparklines',
      type: 'area',
      height: 315,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Banner',
      data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40]
    }],
    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
    yaxis: {
      min: 0
    },
    grid: {
      padding: {
        top: 125,
        right: 0,
        bottom: 0,
        left: 0
      }, 
    },
    tooltip: {
      x: {
        show: false,
      },
      theme: 'dark'
    },
    colors: ['#e7515a']
  }
  
  var d_2options22 = {
    chart: {
      id: 'sparkline2',
      group: 'sparklines',
      type: 'area',
      height: 315,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
        curve: 'smooth',
        width: 2
    },
    fill: {
      opacity: 1,
    },
    series: [{
      name: 'Logo',
      data: [18, 23, 45, 33, 44, 55, 22, 65, 21, 41]
    }],
    labels: ['11', '21', '31', '41', '51', '61', '71', '81', '91', '101'],
    yaxis: {
      min: 0
    },
    grid: {
      padding: {
        top: 125,
        right: 0,
        bottom: 0,
        left: 0
      }, 
    },
    tooltip: {
      x: {
        show: false,
      },
      theme: '#4361ee'
    },
    colors: ['#4361ee']
  }

  
  /*
      =================================
          Revenue Monthly | Options
      =================================
  */
      var barChart =  JSON.parse(window.localStorage.getItem('barChart'));
      var barChart1 =  JSON.parse(window.localStorage.getItem('barChart1'));
      console.log(barChart);
  var options1 = {
    chart: {
      fontFamily: 'Quicksand, sans-serif',
      height: 365,
      type: 'area',
      zoom: {
          enabled: false
      },
      dropShadow: {
        enabled: true,
        opacity: 0.2,
        blur: 10,
        left: -7,
        top: 22
      },
      toolbar: {
        show: false
      },
      events: {
        mounted: function(ctx, config) {
          const highest1 = ctx.getHighestValueInSeries(0);
          const highest2 = ctx.getHighestValueInSeries(1);
  
          ctx.addPointAnnotation({
            x: new Date(ctx.w.globals.seriesX[0][ctx.w.globals.series[0].indexOf(highest1)]).getTime(),
            y: highest1,
            label: {
              style: {
                cssClass: 'd-none'
              }
            },
            customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#2196f3" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
        })

        ctx.addPointAnnotation({
          x: new Date(ctx.w.globals.seriesX[1][ctx.w.globals.series[1].indexOf(highest2)]).getTime(),
          y: highest2,
          label: {
            style: {
              cssClass: 'd-none'
            }
          },
          customSVG: {
              SVG: '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="#e7515a" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>',
              cssClass: undefined,
              offsetX: -8,
              offsetY: 5
          }
          })
        },
      }
    },
    colors: ['#1b55e2', '#e7515a'],
    dataLabels: {
        enabled: false,
    },
    markers: {
      discrete: [{
      seriesIndex: 0,
      dataPointIndex: 7,
      fillColor: '#000',
      strokeColor: '#000',
      size: 5
    }, {
      seriesIndex: 2,
      dataPointIndex: 11,
      fillColor: '#000',
      strokeColor: '#000',
      size: 4
    }]
    },
    subtitle: {
      text: '.',
      align: 'left',
      margin: 0,
      offsetX: 95,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: '18px',
        color:  'var(--blackText)'
      }
    },
    title: {
      text: '.',
      align: 'left',
      margin: 0,
      offsetX: -10,
      offsetY: 0,
      floating: false,
      style: {
        fontSize: '18px',
        color:  'var(--blackText)'
      },
    },
    stroke: {
        show: true,
        curve: 'smooth',
        width: 2,
        lineCap: 'square'
    },
    series: [{
        name: 'Activity Log',
        data: barChart
    },{
      name: 'Login Log',
      data: barChart1
  }],
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    xaxis: {
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      },
      crosshairs: {
        show: true
      },
      labels: {
        offsetX: 0,
        offsetY: 5,
        style: {
            fontSize: '12px',
            fontFamily: 'Quicksand, sans-serif',
            cssClass: 'apexcharts-xaxis-title',
        },
      }
    },
    yaxis: {
      labels: {
        formatter: function(value, index = 100) {
          return value
        },
        offsetX: -22,
        offsetY: 0,
        style: {
            fontSize: '12px',
            fontFamily: 'Quicksand, sans-serif',
            cssClass: 'apexcharts-yaxis-title',
        },
      }
    },
    grid: {
      borderColor: '#e0e6ed',
      strokeDashArray: 5,
      xaxis: {
          lines: {
              show: true
          }
      },   
      yaxis: {
          lines: {
              show: false,
          }
      },
      padding: {
        top: 0,
        right: 0,
        bottom: 0,
        left: -10
      }, 
    }, 
    legend: {
      position: 'top',
      horizontalAlign: 'right',
      offsetY: -50,
      fontSize: '16px',
      fontFamily: 'Quicksand, sans-serif',
      markers: {
        width: 10,
        height: 10,
        strokeWidth: 0,
        strokeColor: '#fff',
        fillColors: undefined,
        radius: 12,
        onClick: undefined,
        offsetX: 0,
        offsetY: 0
      },    
      itemMargin: {
        horizontal: 0,
        vertical: 20
      }
    },
    tooltip: {
      theme: 'dark',
      marker: {
        show: true,
      },
      x: {
        show: false,
      }
    },
    fill: {
        type:"gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: .19,
            opacityTo: .05,
            stops: [100, 100]
        }
    },
    responsive: [{
      breakpoint: 575,
      options: {
        legend: {
            offsetY: -30,
        },
      },
    }]
  }
  
  /*
      ==================================
          Sales By Category | Options
      ==================================
  */
     var pieChart =  JSON.parse(window.localStorage.getItem('pieChart'));
  var options = {
        chart: {
            type: 'donut',
            width: 397
        },
        colors: ['#805dca', '#e2a03f', '#2196f3'],
        dataLabels: {
          enabled: false
        },
        legend: {
            position: 'bottom',
            horizontalAlign: 'center',
            fontSize: '14px',
            markers: {
              width: 10,
              height: 10,
            },
            itemMargin: {
              horizontal: 0,
              vertical: 8
            }
        },
        plotOptions: {
          pie: {
            donut: {
              size: '65%',
              background: 'transparent',
              labels: {
                show: true,
                name: {
                  show: true,
                  fontSize: '29px',
                  fontFamily: 'Quicksand, sans-serif',
                  color: 'var(--blackText)',
                  offsetY: -10
                },
                value: {
                  show: true,
                  fontSize: '26px',
                  fontFamily: 'Quicksand, sans-serif',
                  color: 'var(--blackText)',
                  offsetY: 16,
                  formatter: function (val) {
                    return val
                  }
                },
                total: {
                  show: true,
                  showAlways: true,
                  label: 'Total',
                  color: '#888ea8',
                  formatter: function (w) {
                    return w.globals.seriesTotals.reduce( function(a, b) {
                      return a + b
                    }, 0)
                  }
                }
              }
            }
          }
        },
        stroke: {
          show: true,
          width: 25,
          colors: 'var(--dashboardCard)'
        },
        series: [pieChart.videos, pieChart.images, pieChart.banners],
        labels: ['Media Videos', 'Media images', 'Banners'],
        responsive: [{
            breakpoint: 1599, 
            options: {
                chart: {
                    width: '350px',
                    height: '400px'
                },
                legend: {
                    position: 'bottom'
                }
            },
    
            breakpoint: 1439,
            options: {
                chart: {
                    width: '250px',
                    height: '390px'
                },
                legend: {
                    position: 'bottom'
                },
                plotOptions: {
                  pie: {
                    donut: {
                      size: '65%',
                    }
                  }
                }
            },
        }]
  }
  
  /*
      ==============================
      |    @Render Charts Script    |
      ==============================
  */
  
  
  /*
      ============================
          Daily Sales | Render
      ============================
  */
  var d_2C_1 = new ApexCharts(document.querySelector("#daily-sales"), d_2options1);
  d_2C_1.render();
  
  /*
      ============================
          Total Orders | Render
      ============================
  */
  var d_2C_2 = new ApexCharts(document.querySelector("#total-orders"), d_2options2);
  d_2C_2.render();
 
  var d_2C_22 = new ApexCharts(document.querySelector("#total-orders2"), d_2options22);
  d_2C_22.render();
  
  /*
      ================================
          Revenue Monthly | Render
      ================================
  */
  var chart1 = new ApexCharts(
      document.querySelector("#revenueMonthly"),
      options1
  );
  
  chart1.render();
  
  /*
      =================================
          Sales By Category | Render
      =================================
  */
  var chart = new ApexCharts(
      document.querySelector("#chart-2"),
      options
  );
  
  chart.render();
  
  /*
      =============================================
          Perfect Scrollbar | Recent Activities
      =============================================
  */
 $('.mt-container').each(function(){ const ps = new PerfectScrollbar($(this)[0]); });
  
  const topSellingProduct = new PerfectScrollbar('.widget-table-three .table-scroll table', {
    wheelSpeed:.5,
    swipeEasing:!0,
    minScrollbarLength:40,
    maxScrollbarLength:100,
    suppressScrollY: true
  
  });
  
  } catch(e) {
      console.log(e);
  }
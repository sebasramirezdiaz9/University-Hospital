
<template>
    <div id="chart">
          <div id="chart">
        <apexchart type="line" height="350" :options="chartOptions" :series="series"></apexchart>
      </div>
    
    </div>
</template>
<script>
    export default {
        
        data(){
            return {
                series: [{
              name: "Citas",
              data: [10, 41, 35, 51, 49, 62, 69, 91, 148, 120, 45, 100]
          }],
          chartOptions: {
            chart: {
              height: 350,
              type: 'line',
              zoom: {
                enabled: false
              }
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'straight'
            },
            grid: {
              row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
              },
            },
            xaxis: {
              categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            }
          },
          
          
            }
        },
        created()
        {
            this.getData();
        },
        methods: {
            getData()
            {
                axios.get(this.$route('dates.month')).then((response) =>
                {
                    this.series = [];
                    this.series.push({name: "Citas", data: response.data});
                });
            }
        }
    }
</script>
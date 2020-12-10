
<template>
     <div id="chart">
        <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
      </div>
</template>
<script>
    export default {
        
        data(){
            return {
                 series: [{
                    name: 'Pacientes',
                    data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 45, 80]
                }],
                chartOptions: {
                    chart: {
                    type: 'bar',
                    height: 350
                    },
                    plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                    },
                    dataLabels: {
                    enabled: false
                    },
                    stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                    },
                    xaxis: {
                    categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'],
                    },
                    yaxis: {
                    title: {
                        text: 'Pacientes'
                    }
                    },
                    fill: {
                    opacity: 1
                    },
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
                axios.get(this.$route('patients.month')).then((response) =>
                {
                    this.series = [];
                    this.series.push({name: "Pacientes", data: response.data});
                });
            }
        }
    }
</script>


<template>
     <div id="chart">
        <apexchart type="pie" width="500" :options="chartOptions" :series="series"></apexchart>
      </div>
</template>
<script>
    export default {
        
        data(){
            return {
                 series: [],
                    chartOptions: {
                        chart: {
                        width: 380,
                        type: 'pie',
                        },
                        labels: [],
                        responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                            width: 200
                            },
                            legend: {
                            position: 'bottom'
                            }
                        }
                        }]
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
                axios.get(this.$route('doctors.dates')).then((response) =>
                {
                    response.data.dates_control.forEach(element => {
                        this.series.push(parseInt(element));
                    });
                    response.data.doctors.forEach(element => {
                        this.chartOptions.labels.push("Doctor "+element);
                    });
                });
            }
        }
    }
</script>
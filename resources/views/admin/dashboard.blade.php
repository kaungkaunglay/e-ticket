@extends('resturant.includes.layout')

@section('content')
<div class="container">
    <h1>レストランとユーザーの注文レポート</h1> 

    
    <div class="chart-container mb-5">
        <h2>レストラン別注文数</h2> 
        <canvas id="restaurantChart" width="400" height="200"></canvas>
    </div>
    <div class="chart-container">
        <h2>ユーザー別注文数</h2> 
        <canvas id="userChart" width="400" height="200"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        fetch('{{ route("restaurant.report") }}')
            .then(response => response.json())
            .then(data => {
                const labels = data.map(restaurant => restaurant.name);
                const orderCounts = data.map(restaurant => restaurant.order_count);

                const ctx = document.getElementById('restaurantChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '注文数',
                            data: orderCounts,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: '注文数' 
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'レストラン名'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('レストランデータの取得中にエラーが発生しました:', error)); // Error fetching restaurant data

        
        fetch('{{ route("restaurant.reportuser") }}')
            .then(response => response.json())
            .then(data => {
                const labels = data.map(user => user.first_name);
                const orderCounts = data.map(user => user.order_count);

                const ctx = document.getElementById('userChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: '注文数', 
                            data: orderCounts,
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: '注文数' 
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'ユーザー名' 
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('ユーザーデータの取得中にエラーが発生しました:', error)); 
    });
</script>

<style>
    .chart-container {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    h1 {
        text-align: center;
        margin-bottom: 40px;
        color: #333;
    }

    h2 {
        color: #555;
        margin-bottom: 20px;
    }
</style>
@endsection
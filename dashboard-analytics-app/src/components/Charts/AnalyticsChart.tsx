import React from 'react';
import { Line } from 'react-chartjs-2';

const AnalyticsChart: React.FC = () => {
    const data = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
            {
                label: 'Revenue',
                data: [400, 450, 300, 500, 600, 700, 800],
                fill: false,
                backgroundColor: 'rgba(75,192,192,0.4)',
                borderColor: 'rgba(75,192,192,1)',
            },
        ],
    };

    const options = {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    };

    return (
        <div>
            <h2>Analytics Overview</h2>
            <Line data={data} options={options} />
        </div>
    );
};

export default AnalyticsChart;
import React from 'react';
import './DashboardCards.css';

const DashboardCards = () => {
    const metrics = [
        { title: 'Total Revenue', value: '$10,000', icon: '💰' },
        { title: 'Pending Orders', value: '25', icon: '⏳' },
        { title: 'Completed Orders', value: '150', icon: '✅' },
        { title: 'New Customers', value: '30', icon: '👥' },
    ];

    return (
        <div className="dashboard-cards">
            {metrics.map((metric, index) => (
                <div key={index} className="card">
                    <div className="card-icon">{metric.icon}</div>
                    <div className="card-title">{metric.title}</div>
                    <div className="card-value">{metric.value}</div>
                </div>
            ))}
        </div>
    );
};

export default DashboardCards;
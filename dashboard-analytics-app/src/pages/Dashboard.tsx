import React from 'react';
import Sidebar from '../components/Sidebar/Sidebar';
import DashboardCards from '../components/DashboardCards/DashboardCards';
import ResponsiveGrid from '../components/ResponsiveGrid/ResponsiveGrid';

const Dashboard: React.FC = () => {
    return (
        <div style={{ display: 'flex' }}>
            <Sidebar />
            <div style={{ flex: 1, padding: '20px' }}>
                <h1>Dashboard</h1>
                <DashboardCards />
                <ResponsiveGrid />
            </div>
        </div>
    );
};

export default Dashboard;
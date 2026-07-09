import React from 'react';
import { Link } from 'react-router-dom';
import './Sidebar.css'; // Assuming you will create a CSS file for styling

const Sidebar: React.FC = () => {
    return (
        <div className="sidebar">
            <h2>Dashboard Menu</h2>
            <ul>
                <li>
                    <Link to="/">Dashboard</Link>
                </li>
                <li>
                    <Link to="/pending-orders">Pending Orders</Link>
                </li>
                <li>
                    <Link to="/completed-orders">Completed Orders</Link>
                </li>
                <li>
                    <Link to="/revenue">Revenue</Link>
                </li>
                <li>
                    <Link to="/customer-details">Customer Details</Link>
                </li>
                <li>
                    <Link to="/growth-analytics">Growth Analytics</Link>
                </li>
            </ul>
        </div>
    );
};

export default Sidebar;
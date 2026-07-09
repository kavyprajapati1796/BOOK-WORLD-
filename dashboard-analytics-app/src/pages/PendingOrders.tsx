import React from 'react';
import OrdersTable from '../components/Tables/OrdersTable';

const PendingOrders: React.FC = () => {
    return (
        <div>
            <h1>Pending Orders</h1>
            <OrdersTable />
        </div>
    );
};

export default PendingOrders;
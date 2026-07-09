import React from 'react';
import OrdersTable from '../components/Tables/OrdersTable';

const CompletedOrders: React.FC = () => {
    return (
        <div>
            <h1>Completed Orders</h1>
            <OrdersTable status="completed" />
        </div>
    );
};

export default CompletedOrders;
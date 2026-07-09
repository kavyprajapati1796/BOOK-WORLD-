import React from 'react';

const OrdersTable: React.FC = () => {
    const pendingOrders = [
        { id: 1, customer: 'John Doe', amount: 150, status: 'Pending' },
        { id: 2, customer: 'Jane Smith', amount: 200, status: 'Pending' },
    ];

    const completedOrders = [
        { id: 3, customer: 'Alice Johnson', amount: 300, status: 'Completed' },
        { id: 4, customer: 'Bob Brown', amount: 250, status: 'Completed' },
    ];

    return (
        <div>
            <h2>Pending Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {pendingOrders.map(order => (
                        <tr key={order.id}>
                            <td>{order.id}</td>
                            <td>{order.customer}</td>
                            <td>${order.amount}</td>
                            <td>{order.status}</td>
                        </tr>
                    ))}
                </tbody>
            </table>

            <h2>Completed Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    {completedOrders.map(order => (
                        <tr key={order.id}>
                            <td>{order.id}</td>
                            <td>{order.customer}</td>
                            <td>${order.amount}</td>
                            <td>{order.status}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
};

export default OrdersTable;
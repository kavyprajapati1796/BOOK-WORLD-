export interface Order {
    id: number;
    customerName: string;
    status: 'pending' | 'completed';
    amount: number;
    date: string;
}

export interface RevenueData {
    month: string;
    totalRevenue: number;
}

export interface Customer {
    id: number;
    name: string;
    email: string;
    phone: string;
    address: string;
}

export interface GrowthMetrics {
    year: number;
    growthRate: number;
    newCustomers: number;
}
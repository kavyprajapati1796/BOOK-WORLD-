import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Sidebar from './components/Sidebar/Sidebar';
import Dashboard from './pages/Dashboard';
import PendingOrders from './pages/PendingOrders';
import CompletedOrders from './pages/CompletedOrders';
import Revenue from './pages/Revenue';
import CustomerDetails from './pages/CustomerDetails';
import GrowthAnalytics from './pages/GrowthAnalytics';
import './App.css';

const App: React.FC = () => {
  return (
    <Router>
      <div className="app-container">
        <Sidebar />
        <div className="content">
          <Switch>
            <Route path="/" exact component={Dashboard} />
            <Route path="/pending-orders" component={PendingOrders} />
            <Route path="/completed-orders" component={CompletedOrders} />
            <Route path="/revenue" component={Revenue} />
            <Route path="/customer-details" component={CustomerDetails} />
            <Route path="/growth-analytics" component={GrowthAnalytics} />
          </Switch>
        </div>
      </div>
    </Router>
  );
};

export default App;
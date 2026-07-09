import React from 'react';
import './ResponsiveGrid.css';

const ResponsiveGrid: React.FC<{ children: React.ReactNode }> = ({ children }) => {
    return (
        <div className="responsive-grid">
            {children}
        </div>
    );
};

export default ResponsiveGrid;
<?php
/**
 * Template Name: AI Inventory Control & Supply Chain Page
 * 
 * @package Astra
 */

get_header(); ?>

<div class="ai-service-page inventory-supply-chain-page">
    <div class="service-hero">
        <div class="container">
            <div class="hero-content">
                <h1>AI Inventory Control & Supply Chain Optimization for Healthcare</h1>
                <p class="hero-subtitle">Transform your healthcare supply chain with intelligent AI that predicts demand, automates procurement, prevents stockouts, and ensures HIPAA-compliant inventory management across all locations.</p>
                <div class="hero-cta">
                    <a href="#consultation" class="btn btn-primary">Optimize Supply Chain</a>
                    <a href="#demo" class="btn btn-secondary">View Live Demo</a>
                </div>
            </div>
            <div class="hero-metrics">
                <div class="metric-item">
                    <span class="metric-number">31%</span>
                    <span class="metric-label">Inventory Cost Reduction</span>
                </div>
                <div class="metric-item">
                    <span class="metric-number">94%</span>
                    <span class="metric-label">Stockout Prevention</span>
                </div>
                <div class="metric-item">
                    <span class="metric-number">67%</span>
                    <span class="metric-label">Procurement Time Savings</span>
                </div>
            </div>
        </div>
    </div>

    <div class="supply-chain-challenges">
        <div class="container">
            <h2>Healthcare Supply Chain Pain Points</h2>
            <div class="challenges-grid">
                <div class="challenge-item">
                    <div class="challenge-icon">📦</div>
                    <h4>Unpredictable Demand</h4>
                    <p>Medical supplies have volatile demand patterns due to seasonal illness, emergency situations, and changing patient populations.</p>
                </div>
                <div class="challenge-item">
                    <div class="challenge-icon">💰</div>
                    <h4>High Carrying Costs</h4>
                    <p>Medical devices and pharmaceuticals are expensive to stock, with some items requiring specialized storage conditions.</p>
                </div>
                <div class="challenge-item">
                    <div class="challenge-icon">⏰</div>
                    <h4>Critical Stockouts</h4>
                    <p>Running out of essential medical supplies can delay procedures, impact patient care, and result in emergency rush orders.</p>
                </div>
                <div class="challenge-item">
                    <div class="challenge-icon">📋</div>
                    <h4>Complex Compliance</h4>
                    <p>Medical inventory must comply with FDA regulations, lot tracking, expiration monitoring, and recall management requirements.</p>
                </div>
                <div class="challenge-item">
                    <div class="challenge-icon">🔍</div>
                    <h4>Manual Processes</h4>
                    <p>Many healthcare facilities rely on spreadsheets and manual counting, leading to errors and inefficiencies.</p>
                </div>
                <div class="challenge-item">
                    <div class="challenge-icon">🏥</div>
                    <h4>Multi-Location Complexity</h4>
                    <p>Managing inventory across multiple locations, departments, and facilities creates coordination challenges.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="ai-solution">
        <div class="container">
            <h2>AI-Powered Supply Chain Intelligence</h2>
            <div class="solution-overview">
                <div class="solution-text">
                    <h3>Smart Inventory Optimization</h3>
                    <p>Our AI system analyzes historical usage patterns, seasonal trends, patient demographics, and external factors to predict demand with 94% accuracy. Automated reordering ensures optimal stock levels while minimizing carrying costs.</p>
                    <ul class="solution-benefits">
                        <li>Predictive demand forecasting with machine learning</li>
                        <li>Automated purchase order generation</li>
                        <li>Real-time inventory tracking and alerts</li>
                        <li>Multi-location inventory balancing</li>
                        <li>Expiration date monitoring and FIFO management</li>
                    </ul>
                </div>
                <div class="solution-visual">
                    <div class="inventory-dashboard">
                        <h4>Real-Time Inventory Dashboard</h4>
                        <div class="dashboard-metrics">
                            <div class="dashboard-item low-stock">
                                <span class="item-name">Surgical Gloves (L)</span>
                                <span class="item-status">LOW STOCK</span>
                                <span class="item-quantity">47 boxes</span>
                                <span class="item-action">Auto-order: 200 boxes</span>
                            </div>
                            <div class="dashboard-item optimal">
                                <span class="item-name">N95 Masks</span>
                                <span class="item-status">OPTIMAL</span>
                                <span class="item-quantity">1,247 units</span>
                                <span class="item-action">Next order: 14 days</span>
                            </div>
                            <div class="dashboard-item expiring">
                                <span class="item-name">Injectable Med A</span>
                                <span class="item-status">EXPIRING SOON</span>
                                <span class="item-quantity">23 vials</span>
                                <span class="item-action">Use first priority</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="core-capabilities">
        <div class="container">
            <h2>Comprehensive Supply Chain Management</h2>
            <div class="capabilities-tabs">
                <div class="tab-navigation">
                    <button class="tab-btn active" data-tab="forecasting">Demand Forecasting</button>
                    <button class="tab-btn" data-tab="procurement">Smart Procurement</button>
                    <button class="tab-btn" data-tab="tracking">Inventory Tracking</button>
                    <button class="tab-btn" data-tab="compliance">Compliance Management</button>
                </div>
                
                <div class="tab-content active" id="forecasting">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>AI-Powered Demand Forecasting</h3>
                            <ul class="capability-list">
                                <li><strong>Historical Pattern Analysis:</strong> Analyze 24+ months of usage data to identify trends and seasonality patterns</li>
                                <li><strong>External Factor Integration:</strong> Consider flu seasons, local health trends, and demographic changes</li>
                                <li><strong>Procedure-Based Forecasting:</strong> Predict supply needs based on scheduled surgeries and treatments</li>
                                <li><strong>Emergency Surge Planning:</strong> Model inventory needs for pandemic or disaster response scenarios</li>
                                <li><strong>New Product Introduction:</strong> Forecast adoption rates and demand curves for new medical devices</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="forecasting-chart">
                                <h4>Demand Forecast Accuracy</h4>
                                <div class="forecast-metrics">
                                    <div class="forecast-item">
                                        <span class="forecast-category">PPE Supplies</span>
                                        <span class="forecast-accuracy">96%</span>
                                        <div class="forecast-bar">
                                            <div class="bar-fill" style="width: 96%"></div>
                                        </div>
                                    </div>
                                    <div class="forecast-item">
                                        <span class="forecast-category">Pharmaceuticals</span>
                                        <span class="forecast-accuracy">91%</span>
                                        <div class="forecast-bar">
                                            <div class="bar-fill" style="width: 91%"></div>
                                        </div>
                                    </div>
                                    <div class="forecast-item">
                                        <span class="forecast-category">Medical Devices</span>
                                        <span class="forecast-accuracy">89%</span>
                                        <div class="forecast-bar">
                                            <div class="bar-fill" style="width: 89%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="procurement">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Intelligent Procurement Automation</h3>
                            <ul class="capability-list">
                                <li><strong>Automated PO Generation:</strong> Create purchase orders when inventory hits optimal reorder points</li>
                                <li><strong>Vendor Performance Optimization:</strong> Select best suppliers based on price, delivery time, and quality metrics</li>
                                <li><strong>Contract Management:</strong> Track contract terms, volume discounts, and renewal dates</li>
                                <li><strong>Emergency Sourcing:</strong> Rapidly identify alternative suppliers during shortages or emergencies</li>
                                <li><strong>Budget Optimization:</strong> Balance cost savings with service levels across all inventory categories</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="procurement-dashboard">
                                <h4>Procurement Performance</h4>
                                <div class="procurement-stats">
                                    <div class="stat-card">
                                        <span class="stat-value">$127K</span>
                                        <span class="stat-label">Monthly Savings</span>
                                        <span class="stat-change">+23% vs manual</span>
                                    </div>
                                    <div class="stat-card">
                                        <span class="stat-value">2.1</span>
                                        <span class="stat-label">Avg Days to Delivery</span>
                                        <span class="stat-change">-45% improvement</span>
                                    </div>
                                    <div class="stat-card">
                                        <span class="stat-value">99.2%</span>
                                        <span class="stat-label">On-Time Delivery</span>
                                        <span class="stat-change">Industry leading</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="tracking">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Real-Time Inventory Intelligence</h3>
                            <ul class="capability-list">
                                <li><strong>RFID & Barcode Integration:</strong> Automatic inventory updates with scanning and RFID technology</li>
                                <li><strong>Location Tracking:</strong> Real-time visibility of inventory across departments, floors, and facilities</li>
                                <li><strong>Usage Analytics:</strong> Detailed reporting on consumption patterns and waste reduction opportunities</li>
                                <li><strong>Expiration Management:</strong> FIFO rotation alerts and automated disposal scheduling</li>
                                <li><strong>Theft Prevention:</strong> Anomaly detection for unusual inventory movements or discrepancies</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="tracking-interface">
                                <h4>Multi-Location Inventory</h4>
                                <div class="location-grid">
                                    <div class="location-item">
                                        <span class="location-name">Main Hospital</span>
                                        <span class="location-items">2,847 items</span>
                                        <span class="location-status">✅ Optimal</span>
                                    </div>
                                    <div class="location-item">
                                        <span class="location-name">Outpatient Clinic</span>
                                        <span class="location-items">456 items</span>
                                        <span class="location-status">⚠️ 3 Low Stock</span>
                                    </div>
                                    <div class="location-item">
                                        <span class="location-name">Emergency Dept</span>
                                        <span class="location-items">892 items</span>
                                        <span class="location-status">✅ Optimal</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="compliance">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Healthcare Compliance & Quality Assurance</h3>
                            <ul class="capability-list">
                                <li><strong>FDA Lot Tracking:</strong> Complete traceability from manufacturer to patient with automated lot recording</li>
                                <li><strong>Recall Management:</strong> Instant identification and quarantine of recalled products across all locations</li>
                                <li><strong>Temperature Monitoring:</strong> Integration with cold chain monitoring for vaccines and biologics</li>
                                <li><strong>Audit Trail Generation:</strong> Complete documentation for regulatory inspections and internal audits</li>
                                <li><strong>Quality Control:</strong> Automated quality checks and supplier certification tracking</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="compliance-monitor">
                                <h4>Compliance Dashboard</h4>
                                <div class="compliance-alerts">
                                    <div class="alert-item recall">
                                        <span class="alert-icon">🚨</span>
                                        <span class="alert-text">Product Recall: Lot #ABC123 - 47 units quarantined</span>
                                        <span class="alert-action">View Details</span>
                                    </div>
                                    <div class="alert-item temp">
                                        <span class="alert-icon">❄️</span>
                                        <span class="alert-text">Cold Chain Alert: Vaccine storage temp normalized</span>
                                        <span class="alert-action">Acknowledged</span>
                                    </div>
                                    <div class="alert-item audit">
                                        <span class="alert-icon">📋</span>
                                        <span class="alert-text">Audit Report: 99.7% compliance score this quarter</span>
                                        <span class="alert-action">Export Report</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="industry-applications">
        <div class="container">
            <h2>Healthcare Applications</h2>
            <div class="applications-grid">
                <div class="application-card">
                    <h3>Hospitals & Health Systems</h3>
                    <ul>
                        <li>Central supply management</li>
                        <li>Department-specific inventory</li>
                        <li>OR supply optimization</li>
                        <li>Emergency stockout prevention</li>
                        <li>Multi-facility coordination</li>
                    </ul>
                    <div class="result-highlight">
                        <span class="result-number">$2.3M</span>
                        <span class="result-text">Average annual savings</span>
                    </div>
                </div>
                <div class="application-card">
                    <h3>Medical Device Distributors</h3>
                    <ul>
                        <li>Warehouse optimization</li>
                        <li>Customer demand forecasting</li>
                        <li>Automated replenishment</li>
                        <li>Consignment inventory tracking</li>
                        <li>Performance analytics</li>
                    </ul>
                    <div class="result-highlight">
                        <span class="result-number">47%</span>
                        <span class="result-text">Inventory turnover improvement</span>
                    </div>
                </div>
                <div class="application-card">
                    <h3>Pharmaceutical Companies</h3>
                    <ul>
                        <li>Distribution center management</li>
                        <li>Cold chain monitoring</li>
                        <li>Regulatory compliance tracking</li>
                        <li>Expiration management</li>
                        <li>Channel inventory visibility</li>
                    </ul>
                    <div class="result-highlight">
                        <span class="result-number">89%</span>
                        <span class="result-text">Waste reduction achieved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="roi-calculator">
        <div class="container">
            <h2>Supply Chain ROI Calculator</h2>
            <div class="calculator-container">
                <div class="calculator-inputs">
                    <h3>Calculate Your Potential Savings</h3>
                    <div class="input-group">
                        <label>Annual inventory spend ($):</label>
                        <input type="number" id="inventory-spend" value="2500000" min="100000" max="50000000">
                    </div>
                    <div class="input-group">
                        <label>Number of inventory locations:</label>
                        <input type="number" id="num-locations" value="5" min="1" max="100">
                    </div>
                    <div class="input-group">
                        <label>Average inventory carrying cost (%):</label>
                        <input type="number" id="carrying-cost" value="25" min="15" max="40" step="5">
                    </div>
                    <div class="input-group">
                        <label>Monthly stockout incidents:</label>
                        <input type="number" id="stockouts" value="12" min="0" max="100">
                    </div>
                    <div class="input-group">
                        <label>FTE hours spent on inventory management per week:</label>
                        <input type="number" id="fte-hours" value="120" min="20" max="500">
                    </div>
                </div>
                <div class="calculator-results">
                    <h3>Projected Annual Benefits</h3>
                    <div class="result-metric">
                        <span class="result-label">Inventory Cost Reduction (31%)</span>
                        <span class="result-value" id="inventory-savings">$775,000</span>
                    </div>
                    <div class="result-metric">
                        <span class="result-label">Labor Cost Savings (67%)</span>
                        <span class="result-value" id="labor-savings">$209,600</span>
                    </div>
                    <div class="result-metric">
                        <span class="result-label">Stockout Cost Avoidance</span>
                        <span class="result-value" id="stockout-savings">$144,000</span>
                    </div>
                    <div class="result-metric">
                        <span class="result-label">Total Annual Savings</span>
                        <span class="result-value" id="total-savings">$1,128,600</span>
                    </div>
                    <div class="result-metric roi-metric">
                        <span class="result-label">ROI (Annual)</span>
                        <span class="result-value" id="annual-roi">1,876%</span>
                    </div>
                </div>
            </div>
            <div class="roi-disclaimer">
                <p><strong>Note:</strong> Calculations based on industry averages and client results. Individual results may vary based on current processes and implementation approach.</p>
            </div>
        </div>
    </div>

    <div class="implementation-process">
        <div class="container">
            <h2>Implementation Roadmap</h2>
            <div class="process-timeline">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Current State Assessment</h4>
                        <p>Comprehensive audit of existing inventory processes, systems, and pain points across all locations.</p>
                        <span class="step-duration">Week 1-2</span>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>System Integration & Data Migration</h4>
                        <p>Connect to existing ERP, purchase order systems, and import historical inventory data for AI training.</p>
                        <span class="step-duration">Week 2-4</span>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>AI Model Training & Calibration</h4>
                        <p>Train forecasting models on your specific data and fine-tune parameters for optimal accuracy.</p>
                        <span class="step-duration">Week 4-6</span>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Pilot Launch & Optimization</h4>
                        <p>Start with pilot departments, validate results, and optimize before full organization rollout.</p>
                        <span class="step-duration">Week 6-10</span>
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Full Deployment & Training</h4>
                        <p>Roll out to all locations with comprehensive staff training and ongoing support.</p>
                        <span class="step-duration">Week 10-12</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-section">
        <div class="container">
            <h2>Supply Chain Optimization Pricing</h2>
            <div class="pricing-grid">
                <div class="pricing-card basic">
                    <h3>Single Location</h3>
                    <div class="price">$2,997<span>/month</span></div>
                    <ul class="features">
                        <li>Up to 5,000 SKUs</li>
                        <li>Basic demand forecasting</li>
                        <li>Automated reorder points</li>
                        <li>Standard reporting</li>
                        <li>Email support</li>
                    </ul>
                    <a href="#consultation" class="btn btn-outline">Start Trial</a>
                </div>
                <div class="pricing-card professional featured">
                    <div class="featured-badge">Most Popular</div>
                    <h3>Multi-Location Enterprise</h3>
                    <div class="price">$8,997<span>/month</span></div>
                    <ul class="features">
                        <li>Unlimited SKUs & locations</li>
                        <li>Advanced AI forecasting</li>
                        <li>Compliance management</li>
                        <li>Real-time tracking</li>
                        <li>Priority support</li>
                        <li>Custom integrations</li>
                    </ul>
                    <a href="#consultation" class="btn btn-primary">Start Trial</a>
                </div>
                <div class="pricing-card enterprise">
                    <h3>Health System Enterprise</h3>
                    <div class="price">Custom<span>pricing</span></div>
                    <ul class="features">
                        <li>White-label deployment</li>
                        <li>Custom AI model training</li>
                        <li>Advanced analytics</li>
                        <li>Dedicated success manager</li>
                        <li>24/7 phone support</li>
                        <li>Service level agreements</li>
                    </ul>
                    <a href="#consultation" class="btn btn-outline">Contact Sales</a>
                </div>
            </div>
        </div>
    </div>

    <div class="consultation-cta" id="consultation">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Supply Chain?</h2>
                <p>Join leading healthcare organizations that have reduced inventory costs by 31% and eliminated stockouts. Start your free 30-day trial today.</p>
                <div class="cta-benefits">
                    <div class="benefit">✅ 30-day free trial</div>
                    <div class="benefit">✅ No implementation fees</div>
                    <div class="benefit">✅ Full HIPAA compliance</div>
                    <div class="benefit">✅ Guaranteed ROI</div>
                </div>
                <div class="cta-form">
                    <form class="consultation-form">
                        <div class="form-row">
                            <input type="text" placeholder="Your Name" required>
                            <input type="email" placeholder="Business Email" required>
                        </div>
                        <div class="form-row">
                            <input type="tel" placeholder="Phone Number" required>
                            <input type="text" placeholder="Organization Name" required>
                        </div>
                        <div class="form-row">
                            <select required>
                                <option>Annual Inventory Spend</option>
                                <option>Less than $500K</option>
                                <option>$500K - $2M</option>
                                <option>$2M - $10M</option>
                                <option>$10M+</option>
                            </select>
                            <select required>
                                <option>Number of Locations</option>
                                <option>Single location</option>
                                <option>2-5 locations</option>
                                <option>6-20 locations</option>
                                <option>20+ locations</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-large">Start Free Supply Chain Trial</button>
                        <p class="form-note">No credit card required. Complete supply chain audit included.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Base styles similar to other service pages */
.inventory-supply-chain-page .service-hero {
    background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
}

.supply-chain-challenges {
    padding: 80px 0;
    background: white;
}

.ai-solution {
    padding: 80px 0;
    background: #f8fafc;
}

.core-capabilities {
    padding: 80px 0;
    background: white;
}

.industry-applications {
    padding: 80px 0;
    background: #f8fafc;
}

.roi-calculator {
    padding: 80px 0;
    background: white;
}

.implementation-process {
    padding: 80px 0;
    background: #f8fafc;
}

.pricing-section {
    padding: 80px 0;
    background: #1e293b;
    color: white;
}

.consultation-cta {
    background: #1e293b;
    color: white;
    padding: 80px 0;
}

.hero-metrics {
    display: flex;
    gap: 40px;
    margin-top: 40px;
}

.metric-item {
    text-align: center;
}

.metric-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #10b981;
}

.metric-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

.supply-chain-challenges {
    padding: 80px 0;
    background: #f8fafc;
}

.challenges-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.challenge-item {
    text-align: center;
    padding: 30px 20px;
    background: #fff5f5;
    border-radius: 12px;
    border-left: 4px solid #dc2626;
}

.challenge-icon {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.ai-solution {
    padding: 80px 0;
}

.solution-overview {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
}

.solution-text {
    flex: 1;
}

.solution-benefits {
    list-style: none;
    padding: 0;
    margin-top: 20px;
}

.solution-benefits li {
    padding: 10px 0;
    position: relative;
    padding-left: 25px;
}

.solution-benefits li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #10b981;
    font-weight: bold;
}

.solution-visual {
    flex: 1;
    max-width: 500px;
}

.inventory-dashboard {
    background: #1f2937;
    padding: 25px;
    border-radius: 12px;
    color: white;
}

.dashboard-metrics {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
}

.dashboard-item {
    padding: 15px;
    border-radius: 8px;
    display: grid;
    grid-template-columns: 1fr auto;
    grid-template-rows: auto auto;
    gap: 8px;
}

.dashboard-item.low-stock {
    background: rgba(239, 68, 68, 0.2);
    border-left: 4px solid #ef4444;
}

.dashboard-item.optimal {
    background: rgba(34, 197, 94, 0.2);
    border-left: 4px solid #22c55e;
}

.dashboard-item.expiring {
    background: rgba(249, 115, 22, 0.2);
    border-left: 4px solid #f97316;
}

.item-name {
    font-weight: 600;
}

.item-status {
    font-size: 0.8rem;
    font-weight: 600;
    text-align: right;
}

.item-quantity {
    font-size: 0.9rem;
    opacity: 0.8;
}

.item-action {
    font-size: 0.8rem;
    text-align: right;
    opacity: 0.9;
}

.capabilities-tabs {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    overflow: hidden;
}

.tab-navigation {
    display: flex;
    background: #f8fafc;
    flex-wrap: wrap;
}

.tab-btn {
    flex: 1;
    padding: 20px;
    border: none;
    background: transparent;
    cursor: pointer;
    font-weight: 600;
    color: #718096;
    transition: all 0.3s ease;
    min-width: 180px;
}

.tab-btn.active {
    background: #1e293b;
    color: white;
}

.tab-btn:hover {
    background: rgba(30, 41, 59, 0.1);
}

.tab-content {
    display: none;
    padding: 40px;
}

.tab-content.active {
    display: block;
}

.capability-detail {
    display: flex;
    gap: 40px;
    align-items: flex-start;
}

.capability-text {
    flex: 1;
}

.capability-list {
    list-style: none;
    padding: 0;
}

.capability-list li {
    padding: 15px 0;
    border-bottom: 1px solid #e2e8f0;
}

.capability-visual {
    flex: 1;
    max-width: 500px;
}

.forecasting-chart, .procurement-dashboard, .tracking-interface, .compliance-monitor {
    background: #1e293b;
    padding: 25px;
    border-radius: 8px;
    color: white;
}

.forecast-metrics {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.forecast-item {
    display: flex;
    align-items: center;
    gap: 15px;
}

.forecast-category {
    min-width: 120px;
    font-size: 0.9rem;
}

.forecast-accuracy {
    min-width: 40px;
    font-weight: 600;
    color: #10b981;
}

.forecast-bar {
    flex: 1;
    height: 8px;
    background: rgba(255,255,255,0.1);
    border-radius: 4px;
    overflow: hidden;
}

.bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #10b981 0%, #1e293b 100%);
    border-radius: 4px;
}

.procurement-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 15px;
}

.stat-card {
    text-align: center;
    padding: 20px;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
}

.stat-value {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: #10b981;
    margin-bottom: 5px;
}

.stat-label {
    font-size: 0.9rem;
    margin-bottom: 5px;
}

.stat-change {
    font-size: 0.8rem;
    color: #22c55e;
}

.location-grid {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.location-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    background: rgba(255,255,255,0.1);
    border-radius: 8px;
}

.location-name {
    font-weight: 600;
    flex: 1;
}

.location-items {
    font-size: 0.9rem;
    opacity: 0.8;
}

.location-status {
    font-size: 0.8rem;
    font-weight: 600;
}

.compliance-alerts {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.alert-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    border-radius: 8px;
}

.alert-item.recall {
    background: rgba(239, 68, 68, 0.2);
    border-left: 4px solid #ef4444;
}

.alert-item.temp {
    background: rgba(59, 130, 246, 0.2);
    border-left: 4px solid #3b82f6;
}

.alert-item.audit {
    background: rgba(34, 197, 94, 0.2);
    border-left: 4px solid #22c55e;
}

.alert-icon {
    font-size: 1.2rem;
}

.alert-text {
    flex: 1;
    font-size: 0.9rem;
}

.alert-action {
    font-size: 0.8rem;
    color: #10b981;
    cursor: pointer;
}

.applications-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.application-card {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    position: relative;
}

.application-card h3 {
    color: #10b981;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #1e293b;
}

.application-card ul {
    list-style: none;
    padding: 0;
    margin-bottom: 30px;
}

.application-card li {
    padding: 8px 0;
    position: relative;
    padding-left: 20px;
}

.application-card li::before {
    content: "→";
    position: absolute;
    left: 0;
    color: #10b981;
    font-weight: bold;
}

.result-highlight {
    text-align: center;
    padding: 20px;
    background: rgba(5, 150, 105, 0.1);
    border-radius: 8px;
    border: 2px solid rgba(5, 150, 105, 0.2);
}

.result-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #10b981;
}

.result-text {
    font-size: 0.9rem;
    color: #047857;
}

.roi-calculator {
    padding: 80px 0;
    background: white;
}

.calculator-container {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.calculator-inputs, .calculator-results {
    flex: 1;
    background: white;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.input-group {
    margin-bottom: 25px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #2d3748;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    font-size: 1rem;
}

.input-group input:focus {
    border-color: #1e293b;
    outline: none;
}

.result-metric {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    border-bottom: 1px solid #e2e8f0;
}

.result-metric.roi-metric {
    border-bottom: none;
    background: rgba(5, 150, 105, 0.1);
    margin: 20px -40px -40px;
    padding: 30px 40px;
    border-radius: 0 0 12px 12px;
}

.result-label {
    font-weight: 600;
    color: #2d3748;
}

.result-value {
    font-size: 1.5rem;
    font-weight: 700;
    color: #10b981;
}

.roi-disclaimer {
    max-width: 800px;
    margin: 40px auto 0;
    text-align: center;
    font-size: 0.9rem;
    color: #718096;
}

.process-timeline {
    display: flex;
    flex-direction: column;
    gap: 30px;
    max-width: 800px;
    margin: 0 auto;
}

.process-step {
    display: flex;
    align-items: flex-start;
    gap: 30px;
    padding: 30px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.step-number {
    background: #1e293b;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-content h4 {
    color: #2d3748;
    margin-bottom: 10px;
}

.step-duration {
    display: inline-block;
    background: rgba(5, 150, 105, 0.1);
    color: #047857;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-top: 10px;
}

@media (max-width: 768px) {
    .hero-metrics {
        flex-direction: column;
        gap: 20px;
    }
    
    .solution-overview {
        flex-direction: column;
    }
    
    .capability-detail {
        flex-direction: column;
    }
    
    .tab-navigation {
        flex-direction: column;
    }
    
    .tab-btn {
        min-width: auto;
    }
    
    .calculator-container {
        flex-direction: column;
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
    }
}

/* JavaScript for interactive functionality */
document.addEventListener('DOMContentLoaded', function() {
    // Tab functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));
            
            btn.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // ROI Calculator
    const calculateROI = () => {
        const inventorySpend = parseFloat(document.getElementById('inventory-spend').value) || 2500000;
        const locations = parseFloat(document.getElementById('num-locations').value) || 5;
        const carryingCost = parseFloat(document.getElementById('carrying-cost').value) || 25;
        const stockouts = parseFloat(document.getElementById('stockouts').value) || 12;
        const fteHours = parseFloat(document.getElementById('fte-hours').value) || 120;
        
        // Inventory cost reduction (31% of carrying costs)
        const carryingCostAmount = inventorySpend * (carryingCost / 100);
        const inventorySavings = Math.round(carryingCostAmount * 0.31);
        
        // Labor savings (67% of FTE costs)
        const annualLaborHours = fteHours * 52;
        const laborCost = annualLaborHours * 65; // $65/hour average
        const laborSavings = Math.round(laborCost * 0.67);
        
        // Stockout cost avoidance
        const stockoutCost = stockouts * 12 * 1000; // $1000 per stockout incident
        const stockoutSavings = Math.round(stockoutCost * 0.94); // 94% prevention rate
        
        const totalSavings = inventorySavings + laborSavings + stockoutSavings;
        const serviceCost = 108000; // $9K/month * 12 months
        const roi = Math.round(((totalSavings - serviceCost) / serviceCost) * 100);
        
        document.getElementById('inventory-savings').textContent = '$' + inventorySavings.toLocaleString();
        document.getElementById('labor-savings').textContent = '$' + laborSavings.toLocaleString();
        document.getElementById('stockout-savings').textContent = '$' + stockoutSavings.toLocaleString();
        document.getElementById('total-savings').textContent = '$' + totalSavings.toLocaleString();
        document.getElementById('annual-roi').textContent = roi + '%';
    };
    
    // Add event listeners to calculator inputs
    const calculatorInputs = document.querySelectorAll('.calculator-inputs input');
    calculatorInputs.forEach(input => {
        input.addEventListener('input', calculateROI);
    });
    
    // Initial calculation
    calculateROI();
});
</style>

<?php get_footer(); ?>
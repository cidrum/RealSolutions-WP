<?php
/**
 * Template Name: AI Customer Service Agent Page
 * 
 * @package Astra
 */

get_header(); ?>

<div class="ai-service-page customer-service-page">
    <div class="service-hero">
        <div class="container">
            <div class="hero-content">
                <h1>AI Customer Service Agents for Healthcare Organizations</h1>
                <p class="hero-subtitle">Deliver exceptional 24/7 patient and customer support with HIPAA-compliant AI agents that understand healthcare needs, reduce response times, and improve satisfaction scores.</p>
                <div class="hero-cta">
                    <a href="#consultation" class="btn btn-primary">Start Free Trial</a>
                    <a href="#demo" class="btn btn-secondary">See Live Demo</a>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">99.7%</span>
                    <span class="stat-label">Uptime SLA</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">< 30s</span>
                    <span class="stat-label">Avg Response Time</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.9/5</span>
                    <span class="stat-label">Patient Satisfaction</span>
                </div>
            </div>
        </div>
    </div>

    <div class="problem-solution">
        <div class="container">
            <div class="problem-section">
                <h2>Healthcare Customer Service Challenges</h2>
                <div class="challenges-grid">
                    <div class="challenge-item">
                        <span class="challenge-icon">⏰</span>
                        <h4>After-Hours Inquiries</h4>
                        <p>Patients call outside business hours with urgent questions about appointments, prescriptions, and insurance.</p>
                    </div>
                    <div class="challenge-item">
                        <span class="challenge-icon">📞</span>
                        <h4>High Call Volume</h4>
                        <p>Staff overwhelmed with repetitive questions about billing, appointment scheduling, and basic medical information.</p>
                    </div>
                    <div class="challenge-item">
                        <span class="challenge-icon">💰</span>
                        <h4>Rising Support Costs</h4>
                        <p>Hiring and training qualified healthcare support staff is expensive and time-consuming.</p>
                    </div>
                    <div class="challenge-item">
                        <span class="challenge-icon">🔒</span>
                        <h4>Compliance Requirements</h4>
                        <p>Need to maintain HIPAA compliance while providing timely, accurate patient communication.</p>
                    </div>
                </div>
            </div>
            
            <div class="solution-section">
                <h2>Our AI Customer Service Solution</h2>
                <div class="solution-features">
                    <div class="solution-item">
                        <div class="solution-icon">🤖</div>
                        <h4>Intelligent Virtual Assistant</h4>
                        <p>AI-powered chatbot and voice agent trained specifically on healthcare protocols, insurance processes, and patient care workflows.</p>
                    </div>
                    <div class="solution-item">
                        <div class="solution-icon">🔄</div>
                        <h4>Seamless Escalation</h4>
                        <p>Smart routing system that knows when to escalate complex issues to human staff with complete conversation context.</p>
                    </div>
                    <div class="solution-item">
                        <div class="solution-icon">📊</div>
                        <h4>Advanced Analytics</h4>
                        <p>Detailed insights into patient satisfaction, common issues, and opportunities for service improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-capabilities">
        <div class="container">
            <h2>Core Capabilities</h2>
            <div class="capabilities-tabs">
                <div class="tab-navigation">
                    <button class="tab-btn active" data-tab="appointment">Appointment Management</button>
                    <button class="tab-btn" data-tab="billing">Billing & Insurance</button>
                    <button class="tab-btn" data-tab="clinical">Clinical Support</button>
                    <button class="tab-btn" data-tab="emergency">Emergency Protocols</button>
                </div>
                
                <div class="tab-content active" id="appointment">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Automated Appointment Management</h3>
                            <ul class="capability-list">
                                <li><strong>24/7 Scheduling:</strong> Patients can book, reschedule, or cancel appointments anytime via chat, phone, or web</li>
                                <li><strong>Insurance Verification:</strong> Real-time insurance eligibility checks and pre-authorization handling</li>
                                <li><strong>Appointment Reminders:</strong> Automated SMS, email, and phone call reminders with custom messaging</li>
                                <li><strong>Waitlist Management:</strong> Automatic rebooking when cancellations occur with patient preference matching</li>
                                <li><strong>Multi-Location Support:</strong> Handle scheduling across multiple practice locations and specialists</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="appointment-interface">
                                <h4>Patient Conversation Example</h4>
                                <div class="chat-simulation">
                                    <div class="message patient">Hi, I need to reschedule my cardiology appointment next Tuesday</div>
                                    <div class="message ai">I can help you reschedule. Let me check your appointment with Dr. Rodriguez on March 15th at 2:30 PM. What day works better for you?</div>
                                    <div class="message patient">How about Thursday morning?</div>
                                    <div class="message ai">Perfect! I have Thursday, March 17th at 10:00 AM available. I've updated your appointment and sent a confirmation to your email. Is there anything else I can help you with?</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="billing">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Billing & Insurance Support</h3>
                            <ul class="capability-list">
                                <li><strong>Payment Processing:</strong> Secure payment collection over phone with PCI compliance</li>
                                <li><strong>Insurance Claims:</strong> Status updates on claim processing and explanation of benefits</li>
                                <li><strong>Payment Plans:</strong> Setup and management of patient payment plan options</li>
                                <li><strong>Statement Inquiries:</strong> Detailed explanation of charges, codes, and insurance coverage</li>
                                <li><strong>Prior Authorization:</strong> Status tracking and document submission assistance</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="billing-dashboard">
                                <h4>Billing Automation Stats</h4>
                                <div class="billing-metrics">
                                    <div class="metric">
                                        <span class="value">87%</span>
                                        <span class="label">Payment Collection Rate</span>
                                    </div>
                                    <div class="metric">
                                        <span class="value">65%</span>
                                        <span class="label">Billing Inquiries Resolved</span>
                                    </div>
                                    <div class="metric">
                                        <span class="value">42%</span>
                                        <span class="label">Reduction in AR Days</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="clinical">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Clinical Support Services</h3>
                            <ul class="capability-list">
                                <li><strong>Prescription Refills:</strong> Automated refill requests with pharmacy coordination</li>
                                <li><strong>Test Results:</strong> Secure delivery of lab results with basic interpretation</li>
                                <li><strong>Symptom Assessment:</strong> Initial triage with appropriate urgency routing</li>
                                <li><strong>Care Plan Updates:</strong> Medication adherence reminders and lifestyle guidance</li>
                                <li><strong>Specialist Referrals:</strong> Coordinate referrals and transfer medical records</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="clinical-protocols">
                                <h4>Clinical Decision Tree</h4>
                                <div class="protocol-flow">
                                    <div class="protocol-step">Patient Inquiry</div>
                                    <div class="protocol-arrow">↓</div>
                                    <div class="protocol-step">Symptom Assessment</div>
                                    <div class="protocol-arrow">↓</div>
                                    <div class="protocol-decision">
                                        <span class="urgent">Urgent → Nurse</span>
                                        <span class="routine">Routine → AI Response</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="tab-content" id="emergency">
                    <div class="capability-detail">
                        <div class="capability-text">
                            <h3>Emergency Protocol Management</h3>
                            <ul class="capability-list">
                                <li><strong>Crisis Recognition:</strong> Immediate identification of emergency keywords and situations</li>
                                <li><strong>911 Dispatch:</strong> Automatic emergency services contact with location data</li>
                                <li><strong>On-Call Routing:</strong> Instant connection to on-call physicians or nurses</li>
                                <li><strong>Emergency Contacts:</strong> Notification of family members and emergency contacts</li>
                                <li><strong>Documentation:</strong> Complete logging of emergency interactions for legal compliance</li>
                            </ul>
                        </div>
                        <div class="capability-visual">
                            <div class="emergency-protocol">
                                <h4>Emergency Response Time</h4>
                                <div class="response-time">
                                    <div class="time-metric">
                                        <span class="time-value">< 5</span>
                                        <span class="time-unit">seconds</span>
                                        <span class="time-label">Crisis Detection</span>
                                    </div>
                                    <div class="time-metric">
                                        <span class="time-value">< 15</span>
                                        <span class="time-unit">seconds</span>
                                        <span class="time-label">Emergency Routing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="integration-section">
        <div class="container">
            <h2>Seamless Healthcare System Integration</h2>
            <div class="integration-grid">
                <div class="integration-category">
                    <h3>Electronic Health Records (EHR)</h3>
                    <div class="integration-logos">
                        <span class="integration-item">Epic</span>
                        <span class="integration-item">Cerner</span>
                        <span class="integration-item">AllScripts</span>
                        <span class="integration-item">athenaHealth</span>
                        <span class="integration-item">NextGen</span>
                    </div>
                </div>
                <div class="integration-category">
                    <h3>Practice Management</h3>
                    <div class="integration-logos">
                        <span class="integration-item">AdvancedMD</span>
                        <span class="integration-item">DrChrono</span>
                        <span class="integration-item">Kareo</span>
                        <span class="integration-item">Practice Fusion</span>
                        <span class="integration-item">SimplePractice</span>
                    </div>
                </div>
                <div class="integration-category">
                    <h3>Communication Platforms</h3>
                    <div class="integration-logos">
                        <span class="integration-item">Microsoft Teams</span>
                        <span class="integration-item">Slack</span>
                        <span class="integration-item">Zoom</span>
                        <span class="integration-item">RingCentral</span>
                        <span class="integration-item">Vonage</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="roi-metrics">
        <div class="container">
            <h2>Proven Results for Healthcare Organizations</h2>
            <div class="metrics-grid">
                <div class="metric-card">
                    <div class="metric-icon">⚡</div>
                    <div class="metric-value">89%</div>
                    <div class="metric-label">Reduction in Response Time</div>
                    <div class="metric-detail">Average response time decreased from 4.2 hours to 28 seconds</div>
                </div>
                <div class="metric-card">
                    <div class="metric-icon">😊</div>
                    <div class="metric-value">94%</div>
                    <div class="metric-label">Patient Satisfaction Score</div>
                    <div class="metric-detail">Consistent high ratings for AI-assisted customer service</div>
                </div>
                <div class="metric-card">
                    <div class="metric-icon">💰</div>
                    <div class="metric-value">67%</div>
                    <div class="metric-label">Cost Reduction</div>
                    <div class="metric-detail">Significant savings on customer service staffing costs</div>
                </div>
                <div class="metric-card">
                    <div class="metric-icon">📈</div>
                    <div class="metric-value">156%</div>
                    <div class="metric-label">Call Resolution Increase</div>
                    <div class="metric-detail">More issues resolved on first contact without escalation</div>
                </div>
            </div>
        </div>
    </div>

    <div class="compliance-security">
        <div class="container">
            <h2>Healthcare Compliance & Security</h2>
            <div class="compliance-grid">
                <div class="compliance-item">
                    <div class="compliance-badge">
                        <span class="badge-icon">🛡️</span>
                        <h4>HIPAA Compliant</h4>
                    </div>
                    <p>Full HIPAA compliance with encrypted data transmission, secure storage, and comprehensive audit trails for all patient interactions.</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-badge">
                        <span class="badge-icon">🔒</span>
                        <h4>SOC 2 Type II</h4>
                    </div>
                    <p>Certified security controls for availability, processing integrity, confidentiality, and privacy of customer data.</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-badge">
                        <span class="badge-icon">✅</span>
                        <h4>FDA Guidelines</h4>
                    </div>
                    <p>Adheres to FDA guidelines for digital therapeutics and health information technology systems.</p>
                </div>
                <div class="compliance-item">
                    <div class="compliance-badge">
                        <span class="badge-icon">🌍</span>
                        <h4>GDPR Ready</h4>
                    </div>
                    <p>European privacy regulation compliance for healthcare organizations with international patients.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pricing-section">
        <div class="container">
            <h2>Flexible Pricing for Every Healthcare Organization</h2>
            <div class="pricing-toggle">
                <span class="toggle-label">Monthly</span>
                <label class="switch">
                    <input type="checkbox" id="pricing-toggle">
                    <span class="slider"></span>
                </label>
                <span class="toggle-label">Annual <span class="discount-badge">Save 25%</span></span>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card basic">
                    <h3>Basic Support</h3>
                    <div class="price">
                        <span class="monthly-price">$197<span>/month</span></span>
                        <span class="annual-price">$148<span>/month</span></span>
                    </div>
                    <ul class="features">
                        <li>Up to 1,000 interactions/month</li>
                        <li>Basic appointment scheduling</li>
                        <li>Email and chat support</li>
                        <li>Standard integrations</li>
                        <li>Basic reporting</li>
                    </ul>
                    <a href="#consultation" class="btn btn-outline">Start Free Trial</a>
                </div>
                <div class="pricing-card professional featured">
                    <div class="featured-badge">Most Popular</div>
                    <h3>Professional Support</h3>
                    <div class="price">
                        <span class="monthly-price">$497<span>/month</span></span>
                        <span class="annual-price">$373<span>/month</span></span>
                    </div>
                    <ul class="features">
                        <li>Up to 5,000 interactions/month</li>
                        <li>Advanced scheduling & billing</li>
                        <li>Multi-channel support</li>
                        <li>Premium integrations</li>
                        <li>Advanced analytics</li>
                        <li>Priority support</li>
                    </ul>
                    <a href="#consultation" class="btn btn-primary">Start Free Trial</a>
                </div>
                <div class="pricing-card enterprise">
                    <h3>Enterprise Support</h3>
                    <div class="price">
                        <span class="monthly-price">$997<span>/month</span></span>
                        <span class="annual-price">$748<span>/month</span></span>
                    </div>
                    <ul class="features">
                        <li>Unlimited interactions</li>
                        <li>Custom workflows</li>
                        <li>White-label options</li>
                        <li>Custom integrations</li>
                        <li>Dedicated success manager</li>
                        <li>24/7 phone support</li>
                    </ul>
                    <a href="#consultation" class="btn btn-outline">Contact Sales</a>
                </div>
            </div>
            <div class="pricing-guarantee">
                <p><strong>30-Day Money-Back Guarantee</strong> - If you're not completely satisfied with the improvement in your patient satisfaction scores, we'll refund your first month.</p>
            </div>
        </div>
    </div>

    <div class="consultation-cta" id="consultation">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Patient Experience?</h2>
                <p>Join over 500 healthcare organizations already using our AI customer service agents. Start your free 14-day trial today.</p>
                <div class="cta-benefits">
                    <div class="benefit">✅ No setup fees</div>
                    <div class="benefit">✅ 14-day free trial</div>
                    <div class="benefit">✅ Full HIPAA compliance</div>
                    <div class="benefit">✅ Cancel anytime</div>
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
                                <option>Current Monthly Support Volume</option>
                                <option>Less than 500 interactions</option>
                                <option>500-2000 interactions</option>
                                <option>2000-5000 interactions</option>
                                <option>5000+ interactions</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-large">Start Free 14-Day Trial</button>
                        <p class="form-note">No credit card required. HIPAA-compliant setup in under 24 hours.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Dark theme styling to match website design */
.customer-service-page {
    background: #f8fafc;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
}

.customer-service-page .service-hero {
    background: linear-gradient(135deg, #0F172A 0%, #070614 100%);
    color: white;
    padding: 100px 0;
}

.customer-service-page h1, .customer-service-page h2, .customer-service-page h3, .customer-service-page h4 {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
    font-weight: 600;
    letter-spacing: -0.5px;
}

.hero-stats {
    display: flex;
    gap: 40px;
    margin-top: 40px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2rem;
    font-weight: 700;
    color: #0085FF;
}

.stat-label {
    font-size: 0.9rem;
    opacity: 0.8;
}

.problem-solution {
    padding: 80px 0;
    background: white;
}

.service-capabilities {
    padding: 80px 0;
    background: #f8fafc;
}

.integration-section {
    padding: 80px 0;
    background: white;
}

.roi-metrics {
    padding: 80px 0;
    background: #f8fafc;
}

.compliance-security {
    padding: 80px 0;
    background: white;
}

.pricing-section {
    padding: 80px 0;
    background: #070614;
    color: white;
}

.pricing-section h2 {
    color: white;
    text-align: center;
    margin-bottom: 40px;
}

.consultation-cta {
    padding: 100px 0;
    background: linear-gradient(135deg, #1e293b 0%, #070614 100%);
    color: white;
}

.consultation-cta h2 {
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

.problem-section {
    margin-bottom: 60px;
}

.challenges-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.challenge-item {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 12px;
    border-left: 4px solid #ef4444;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.challenge-icon {
    font-size: 2rem;
    margin-bottom: 15px;
    display: block;
}

.solution-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 40px;
}

.solution-item {
    padding: 30px;
    background: white;
    border-radius: 12px;
    border-left: 4px solid #0085FF;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.solution-icon {
    font-size: 2rem;
    margin-bottom: 15px;
    display: block;
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
    min-width: 200px;
}

.tab-btn.active {
    background: #0F172A;
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

.chat-simulation {
    background: #f8fafc;
    padding: 20px;
    border-radius: 8px;
    max-height: 300px;
    overflow-y: auto;
}

.message {
    margin-bottom: 15px;
    padding: 12px 16px;
    border-radius: 18px;
    max-width: 80%;
}

.message.patient {
    background: #e3f2fd;
    margin-left: auto;
    text-align: right;
}

.message.ai {
    background: #e8f5e8;
    margin-right: auto;
}

.integration-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
    margin-top: 40px;
}

.integration-category h3 {
    color: #1e293b;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #0085FF;
}

.integration-logos {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.integration-item {
    background: white;
    padding: 10px 15px;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-size: 0.9rem;
    color: #2d3748;
}

.metrics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.metric-card {
    background: white;
    padding: 40px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.metric-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.metric-value {
    display: block;
    font-size: 3rem;
    font-weight: 700;
    color: #0085FF;
    margin-bottom: 10px;
}

.metric-label {
    font-size: 1.2rem;
    font-weight: 600;
    color: #2d3748;
    margin-bottom: 10px;
}

.metric-detail {
    font-size: 0.9rem;
    color: #718096;
}

.compliance-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.compliance-item {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
}

.compliance-badge {
    margin-bottom: 20px;
}

.badge-icon {
    font-size: 3rem;
    margin-bottom: 15px;
    display: block;
}

.compliance-badge h4 {
    color: #0085FF;
    margin-bottom: 0;
}

.pricing-toggle {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15px;
    margin-bottom: 40px;
}

.switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    transition: .4s;
    border-radius: 34px;
}

.slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    transition: .4s;
    border-radius: 50%;
}

input:checked + .slider {
    background-color: #0085FF;
}

input:checked + .slider:before {
    transform: translateX(26px);
}

.discount-badge {
    background: #ff6b6b;
    color: white;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 0.8rem;
}

.annual-price {
    display: none;
}

.pricing-guarantee {
    text-align: center;
    margin-top: 40px;
    padding: 30px;
    background: rgba(16, 185, 129, 0.1);
    border-radius: 12px;
}

.cta-benefits {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin: 30px 0;
    flex-wrap: wrap;
}

.benefit {
    color: #0085FF;
    font-weight: 600;
}

.form-note {
    text-align: center;
    font-size: 0.9rem;
    opacity: 0.8;
    margin-top: 15px;
}

@media (max-width: 768px) {
    .hero-stats {
        flex-direction: column;
        gap: 20px;
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
    
    .cta-benefits {
        flex-direction: column;
        gap: 15px;
    }
}

/* Button Styling */
.btn {
    padding: 16px 32px;
    border-radius: 2px;
    text-decoration: none;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.9rem;
    border: 2px solid;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-primary {
    background: #0085FF;
    color: white;
    border-color: #0085FF;
}

.btn-primary:hover {
    background: transparent;
    color: #0085FF;
    border-color: #0085FF;
}

.btn-secondary, .btn-outline {
    background: transparent;
    color: #0085FF;
    border-color: #0085FF;
}

.btn-secondary:hover, .btn-outline:hover {
    background: #0085FF;
    color: white;
    border-color: #0085FF;
}

/* JavaScript for tab functionality */
document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            
            // Remove active class from all tabs
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(t => t.classList.remove('active'));
            
            // Add active class to clicked tab
            btn.classList.add('active');
            document.getElementById(tabId).classList.add('active');
        });
    });
    
    // Pricing toggle
    const pricingToggle = document.getElementById('pricing-toggle');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const annualPrices = document.querySelectorAll('.annual-price');
    
    if (pricingToggle) {
        pricingToggle.addEventListener('change', function() {
            if (this.checked) {
                monthlyPrices.forEach(price => price.style.display = 'none');
                annualPrices.forEach(price => price.style.display = 'inline');
            } else {
                monthlyPrices.forEach(price => price.style.display = 'inline');
                annualPrices.forEach(price => price.style.display = 'none');
            }
        });
    }
});
</style>

<?php get_footer(); ?>
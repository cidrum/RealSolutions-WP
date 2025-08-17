<?php
/**
 * Template Name: AI Agents Overview Page
 * 
 * @package Astra
 */

get_header(); ?>

<div class="ai-agents-overview-page">
    <div class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>AI Agent Development & Infrastructure Solutions</h1>
                <p class="hero-subtitle">Transform your healthcare business with intelligent AI agents that work together seamlessly. Our comprehensive AI infrastructure development delivers custom agent ecosystems that automate processes, improve efficiency, and drive growth.</p>
                <div class="hero-cta">
                    <a href="#consultation" class="btn btn-primary">Start AI Development</a>
                    <a href="#agent-types" class="btn btn-secondary">Explore Agent Types</a>
                </div>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Specialized AI Agents</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">89%</span>
                    <span class="stat-label">Process Automation</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">$2.1M</span>
                    <span class="stat-label">Avg Annual Savings</span>
                </div>
            </div>
        </div>
    </div>

    <div class="agent-ecosystem">
        <div class="container">
            <h2>Integrated AI Agent Ecosystem</h2>
            <p class="section-intro">Our AI agents don't work in isolation. They're designed to communicate, share data, and collaborate to create powerful business outcomes that are greater than the sum of their parts.</p>
            
            <div class="ecosystem-visual">
                <div class="central-hub">
                    <div class="hub-icon">🧠</div>
                    <h3>AI Infrastructure Core</h3>
                    <p>Central intelligence that coordinates all agents</p>
                </div>
                
                <div class="agent-connections">
                    <div class="agent-node">
                        <div class="node-icon">🏥</div>
                        <span>Customer Service</span>
                    </div>
                    <div class="agent-node">
                        <div class="node-icon">💰</div>
                        <span>Financial</span>
                    </div>
                    <div class="agent-node">
                        <div class="node-icon">📊</div>
                        <span>Sales</span>
                    </div>
                    <div class="agent-node">
                        <div class="node-icon">🔬</div>
                        <span>Research</span>
                    </div>
                    <div class="agent-node">
                        <div class="node-icon">📦</div>
                        <span>Inventory</span>
                    </div>
                </div>
            </div>
            
            <div class="ecosystem-benefits">
                <div class="benefit-card">
                    <h4>Seamless Data Flow</h4>
                    <p>Patient information, financial data, and operational metrics flow seamlessly between agents for comprehensive insights.</p>
                </div>
                <div class="benefit-card">
                    <h4>Coordinated Actions</h4>
                    <p>When one agent identifies an opportunity, others automatically adjust their workflows to maximize impact.</p>
                </div>
                <div class="benefit-card">
                    <h4>Compound Intelligence</h4>
                    <p>Multiple agents learning from each other creates exponentially smarter decision-making over time.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="agent-types" id="agent-types">
        <div class="container">
            <h2>Our Specialized AI Agents</h2>
            <div class="agents-grid">
                <div class="agent-card">
                    <div class="agent-icon">🏥</div>
                    <h3>AI Customer Service Agent</h3>
                    <p>24/7 HIPAA-compliant patient support with appointment scheduling, billing inquiries, and medical information assistance.</p>
                    <div class="agent-features">
                        <span class="feature-tag">Appointment Management</span>
                        <span class="feature-tag">Insurance Verification</span>
                        <span class="feature-tag">Patient Communication</span>
                    </div>
                    <a href="<?php echo home_url('/ai-customer-service-agent/'); ?>" class="agent-link">Learn More →</a>
                </div>

                <div class="agent-card">
                    <div class="agent-icon">💰</div>
                    <h3>AI Financial Assistant</h3>
                    <p>Automate billing, revenue cycle management, and financial reporting while maintaining compliance and accuracy.</p>
                    <div class="agent-features">
                        <span class="feature-tag">Revenue Cycle</span>
                        <span class="feature-tag">Claims Processing</span>
                        <span class="feature-tag">Financial Analytics</span>
                    </div>
                    <a href="<?php echo home_url('/ai-financial-assistant/'); ?>" class="agent-link">Learn More →</a>
                </div>

                <div class="agent-card">
                    <div class="agent-icon">📊</div>
                    <h3>AI Sales Agent</h3>
                    <p>Intelligent lead qualification, personalized outreach, and automated follow-up sequences for healthcare sales.</p>
                    <div class="agent-features">
                        <span class="feature-tag">Lead Qualification</span>
                        <span class="feature-tag">CRM Integration</span>
                        <span class="feature-tag">Pipeline Management</span>
                    </div>
                    <a href="<?php echo home_url('/ai-sales-agent/'); ?>" class="agent-link">Learn More →</a>
                </div>

                <div class="agent-card">
                    <div class="agent-icon">🔬</div>
                    <h3>AI Research Assistant</h3>
                    <p>Accelerate medical research with literature reviews, data analysis, and evidence-based insights.</p>
                    <div class="agent-features">
                        <span class="feature-tag">Literature Reviews</span>
                        <span class="feature-tag">Data Analysis</span>
                        <span class="feature-tag">Clinical Studies</span>
                    </div>
                    <a href="<?php echo home_url('/ai-research-assistant/'); ?>" class="agent-link">Learn More →</a>
                </div>

                <div class="agent-card">
                    <div class="agent-icon">📦</div>
                    <h3>AI Inventory & Supply Chain</h3>
                    <p>Optimize inventory management, predict demand, and automate procurement for healthcare organizations.</p>
                    <div class="agent-features">
                        <span class="feature-tag">Demand Forecasting</span>
                        <span class="feature-tag">Automated Ordering</span>
                        <span class="feature-tag">Supply Optimization</span>
                    </div>
                    <a href="<?php echo home_url('/ai-inventory-supply-chain/'); ?>" class="agent-link">Learn More →</a>
                </div>
            </div>
        </div>
    </div>

    <div class="development-process">
        <div class="container">
            <h2>AI Agent Development Process</h2>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h4>Infrastructure Assessment</h4>
                    <p>We analyze your current systems, data flows, and business processes to design the optimal AI agent architecture.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h4>Custom Agent Development</h4>
                    <p>Our team builds specialized agents tailored to your specific healthcare workflows and compliance requirements.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h4>Integration & Testing</h4>
                    <p>Seamless integration with existing systems followed by comprehensive testing to ensure optimal performance.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h4>Deployment & Optimization</h4>
                    <p>Launch your AI agent ecosystem with ongoing monitoring, optimization, and support from our expert team.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="infrastructure-benefits">
        <div class="container">
            <h2>Why Choose Our AI Infrastructure Development</h2>
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">🏗️</div>
                    <h4>Scalable Architecture</h4>
                    <p>Our AI infrastructure grows with your business, supporting additional agents and increasing workloads seamlessly.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🔒</div>
                    <h4>Enterprise Security</h4>
                    <p>HIPAA-compliant, SOC 2 certified infrastructure with end-to-end encryption and comprehensive audit trails.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🔗</div>
                    <h4>Seamless Integration</h4>
                    <p>Connect with existing EHR systems, practice management software, and third-party healthcare tools.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">📈</div>
                    <h4>Continuous Learning</h4>
                    <p>Our agents improve over time, learning from your data and adapting to changing business needs.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🎯</div>
                    <h4>Healthcare-Specific</h4>
                    <p>Pre-trained on medical terminology, regulations, and industry best practices for immediate value.</p>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon">🔄</div>
                    <h4>Real-Time Coordination</h4>
                    <p>Agents communicate in real-time to provide coordinated responses and unified customer experiences.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="consultation-cta" id="consultation">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Build Your AI Agent Ecosystem?</h2>
                <p>Let's discuss your specific needs and design a custom AI infrastructure that transforms your healthcare business. Our expert team will guide you through every step of the development process.</p>
                <div class="cta-benefits">
                    <div class="benefit">✅ Free consultation & infrastructure assessment</div>
                    <div class="benefit">✅ Custom AI agent development roadmap</div>
                    <div class="benefit">✅ ROI projections and timeline</div>
                    <div class="benefit">✅ HIPAA compliance guarantee</div>
                </div>
                <div class="cta-form">
                    <form class="consultation-form" action="mailto:development@realsolutions-ai.com" method="post" enctype="text/plain">
                        <div class="form-row">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Business Email" required>
                        </div>
                        <div class="form-row">
                            <input type="tel" name="phone" placeholder="Phone Number" required>
                            <input type="text" name="organization" placeholder="Organization Name" required>
                        </div>
                        <div class="form-row">
                            <select name="agent-interest" required>
                                <option value="">Which AI Agents Interest You?</option>
                                <option value="single-agent">Single Specialized Agent</option>
                                <option value="multiple-agents">Multiple Coordinated Agents</option>
                                <option value="full-ecosystem">Complete AI Ecosystem</option>
                                <option value="consultation">Not Sure - Need Consultation</option>
                            </select>
                            <select name="timeline" required>
                                <option value="">Development Timeline</option>
                                <option value="immediate">Immediate (1-2 months)</option>
                                <option value="near-term">Near-term (3-6 months)</option>
                                <option value="planning">Planning Phase (6+ months)</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-large">Get AI Development Consultation</button>
                        <p class="form-disclaimer">Schedule your free consultation to discuss your AI agent development needs. No commitment required.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.ai-agents-overview-page {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
    line-height: 1.6;
    color: #1e293b;
}

.ai-agents-overview-page h1, .ai-agents-overview-page h2, .ai-agents-overview-page h3, .ai-agents-overview-page h4 {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', system-ui, sans-serif;
    font-weight: 600;
    letter-spacing: -0.5px;
}

.ai-agents-overview-page h2 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: white;
}

.hero-section {
    background: linear-gradient(135deg, #0F172A 0%, #070614 100%);
    color: white;
    padding: 100px 0;
    text-align: center;
}

.hero-content h1 {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-subtitle {
    font-size: 1.3rem;
    margin-bottom: 40px;
    opacity: 0.9;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.hero-cta {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 60px;
}

.hero-stats {
    display: flex;
    justify-content: center;
    gap: 60px;
    flex-wrap: wrap;
}

.stat-item {
    text-align: center;
}

.stat-number {
    display: block;
    font-size: 2.5rem;
    font-weight: 700;
    color: #0085FF;
}

.stat-label {
    font-size: 1rem;
    opacity: 0.8;
}

.agent-ecosystem {
    padding: 80px 0;
    background: #070614;
    color: white;
    text-align: center;
}

.section-intro {
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto 60px;
    opacity: 0.9;
}

.ecosystem-visual {
    position: relative;
    max-width: 800px;
    margin: 60px auto;
    padding: 60px 0;
}

.central-hub {
    background: linear-gradient(135deg, #0085FF, #0070cc);
    padding: 40px;
    border-radius: 20px;
    margin-bottom: 60px;
    box-shadow: 0 8px 32px rgba(0, 133, 255, 0.3);
}

.hub-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.agent-connections {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.agent-node {
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 12px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: transform 0.3s ease;
}

.agent-node:hover {
    transform: translateY(-5px);
}

.node-icon {
    font-size: 2rem;
    margin-bottom: 10px;
}

.ecosystem-benefits {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
    margin-top: 60px;
}

.benefit-card {
    background: rgba(255, 255, 255, 0.05);
    padding: 30px;
    border-radius: 12px;
    backdrop-filter: blur(10px);
}

.agent-types {
    padding: 80px 0;
    background: #070614;
    color: white;
}

.agents-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.agent-card {
    background: white;
    padding: 40px 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
    color: #2d3748;
}

.agent-card:hover {
    transform: translateY(-5px);
}

.agent-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.agent-card h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #1a202c;
}

.agent-card p {
    color: #4a5568;
    margin-bottom: 20px;
    line-height: 1.6;
}

.agent-features {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-bottom: 25px;
}

.feature-tag {
    background: #e3f2fd;
    color: #1565c0;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 500;
}

.agent-link {
    color: #0085FF;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.agent-link:hover {
    color: #0070cc;
}

.development-process {
    padding: 80px 0;
    background: linear-gradient(180deg, #070614 0%, #1e293b 100%);
    color: white;
}

.process-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-top: 40px;
}

.process-step {
    text-align: center;
    padding: 30px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    backdrop-filter: blur(10px);
}

.step-number {
    width: 60px;
    height: 60px;
    background: #0085FF;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: 700;
    margin: 0 auto 20px;
}

.infrastructure-benefits {
    padding: 80px 0;
    background: #070614;
    color: white;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.benefit-item {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    text-align: center;
    transition: transform 0.3s ease;
    color: #2d3748;
}

.benefit-item:hover {
    transform: translateY(-5px);
}

.benefit-icon {
    font-size: 3rem;
    margin-bottom: 20px;
}

.benefit-item h4 {
    color: #1a202c;
    margin-bottom: 15px;
}

.benefit-item p {
    color: #4a5568;
    line-height: 1.6;
}

.consultation-cta {
    padding: 80px 0;
    background: linear-gradient(180deg, #1e293b 0%, #070614 100%);
    color: white;
    text-align: center;
}

.cta-content {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
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

.cta-form {
    background: rgba(255,255,255,0.1);
    padding: 40px;
    border-radius: 12px;
    margin-top: 40px;
    backdrop-filter: blur(10px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.form-row input,
.form-row select {
    flex: 1;
    min-width: 250px;
    padding: 15px;
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 8px;
    background: rgba(255,255,255,0.9);
    color: #2d3748;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-row input:focus,
.form-row select:focus {
    outline: none;
    border-color: #0085FF;
    box-shadow: 0 0 0 3px rgba(0, 133, 255, 0.1);
}

.form-row input::placeholder {
    color: #718096;
}

.form-disclaimer {
    text-align: center;
    font-size: 0.9rem;
    color: #cbd5e1;
    margin-top: 15px;
    opacity: 0.8;
}

.btn {
    padding: 16px 32px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    display: inline-block;
    cursor: pointer;
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

.btn-secondary {
    background: transparent;
    color: white;
    border-color: white;
}

.btn-secondary:hover {
    background: white;
    color: #0F172A;
    border-color: white;
}

.btn-large {
    padding: 20px 40px;
    font-size: 1.1rem;
    width: 100%;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 2.5rem;
    }
    
    .hero-stats {
        flex-direction: column;
        gap: 30px;
    }
    
    .agents-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        flex-direction: column;
    }
    
    .form-row input,
    .form-row select {
        min-width: 100%;
    }
    
    .cta-benefits {
        flex-direction: column;
        gap: 15px;
    }
}
</style>

<?php get_footer(); ?>
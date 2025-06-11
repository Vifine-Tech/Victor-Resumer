<?php

namespace VictorKipkoech\Portfolio\Services;

class PortfolioService
{
    public function getProfile()
    {
        return [
            'name' => config('portfolio.name'),
            'title' => config('portfolio.title'),
            'email' => config('portfolio.email'),
            'phone' => config('portfolio.phone'),
            'location' => config('portfolio.location'),
            'domain' => config('portfolio.domain'),
            'social_links' => config('portfolio.social_links'),
            'bio' => 'Passionate DevOps Engineer with over 5 years of experience in designing, implementing, and maintaining scalable cloud infrastructure and automation solutions.',
            'stats' => [
                'projects' => '50+',
                'experience' => '5+',
                'uptime' => '99.9%'
            ]
        ];
    }

    public function getSkills()
    {
        return [
            'Cloud Platforms' => [
                ['name' => 'AWS', 'level' => 95, 'color' => 'bg-orange-500'],
                ['name' => 'Azure', 'level' => 85, 'color' => 'bg-blue-500'],
                ['name' => 'Google Cloud', 'level' => 80, 'color' => 'bg-green-500'],
                ['name' => 'Digital Ocean', 'level' => 90, 'color' => 'bg-indigo-500']
            ],
            'DevOps Tools' => [
                ['name' => 'Docker', 'level' => 95, 'color' => 'bg-blue-600'],
                ['name' => 'Kubernetes', 'level' => 90, 'color' => 'bg-purple-500'],
                ['name' => 'Jenkins', 'level' => 85, 'color' => 'bg-red-500'],
                ['name' => 'GitLab CI', 'level' => 88, 'color' => 'bg-orange-600']
            ],
            'Infrastructure as Code' => [
                ['name' => 'Terraform', 'level' => 92, 'color' => 'bg-purple-600'],
                ['name' => 'Ansible', 'level' => 88, 'color' => 'bg-red-600'],
                ['name' => 'CloudFormation', 'level' => 85, 'color' => 'bg-orange-500'],
                ['name' => 'Helm', 'level' => 80, 'color' => 'bg-blue-500']
            ],
            'Monitoring & Security' => [
                ['name' => 'Prometheus', 'level' => 90, 'color' => 'bg-orange-500'],
                ['name' => 'Grafana', 'level' => 88, 'color' => 'bg-orange-600'],
                ['name' => 'ELK Stack', 'level' => 85, 'color' => 'bg-yellow-500'],
                ['name' => 'HashiCorp Vault', 'level' => 82, 'color' => 'bg-gray-600']
            ]
        ];
    }

    public function getExperience()
    {
        return [
            [
                'company' => 'TechCorp Solutions',
                'position' => 'Senior DevOps Engineer',
                'location' => 'Nairobi, Kenya',
                'period' => '2022 - Present',
                'description' => 'Leading the DevOps transformation initiative for a fintech company serving 2M+ users.',
                'achievements' => [
                    'Reduced deployment time from 4 hours to 15 minutes using automated CI/CD pipelines',
                    'Implemented Infrastructure as Code reducing infrastructure costs by 35%',
                    'Built monitoring and alerting systems achieving 99.9% uptime',
                    'Led a team of 4 engineers in migrating legacy systems to cloud-native architecture'
                ],
                'technologies' => ['AWS', 'Kubernetes', 'Terraform', 'Jenkins', 'Prometheus', 'Grafana']
            ],
            [
                'company' => 'CloudWave Technologies',
                'position' => 'DevOps Engineer',
                'location' => 'Remote',
                'period' => '2020 - 2022',
                'description' => 'Specialized in cloud migration and containerization for enterprise clients.',
                'achievements' => [
                    'Successfully migrated 15+ legacy applications to containerized environments',
                    'Designed and implemented multi-cloud disaster recovery solutions',
                    'Automated deployment processes reducing manual interventions by 90%',
                    'Achieved ISO 27001 compliance for client infrastructure'
                ],
                'technologies' => ['Docker', 'Azure', 'Ansible', 'GitLab CI', 'ELK Stack', 'Vault']
            ],
            [
                'company' => 'StartupHub Kenya',
                'position' => 'Junior DevOps Engineer',
                'location' => 'Nairobi, Kenya',
                'period' => '2019 - 2020',
                'description' => 'Built CI/CD pipelines and managed cloud infrastructure for multiple startup clients.',
                'achievements' => [
                    'Set up automated testing and deployment for 10+ client projects',
                    'Implemented cost optimization strategies saving clients $50K annually',
                    'Established monitoring and logging practices improving incident response time by 60%',
                    'Mentored junior developers on DevOps best practices'
                ],
                'technologies' => ['AWS', 'Docker', 'Jenkins', 'Terraform', 'Python', 'Bash']
            ]
        ];
    }

    public function getProjects()
    {
        return [
            [
                'title' => 'E-Commerce Platform CI/CD',
                'description' => 'Complete DevOps transformation for a major e-commerce platform handling 100K+ daily transactions.',
                'image' => 'https://images.pexels.com/photos/230544/pexels-photo-230544.jpeg?auto=compress&cs=tinysrgb&w=600',
                'technologies' => ['AWS', 'Kubernetes', 'Jenkins', 'Terraform', 'Prometheus'],
                'achievements' => [
                    'Reduced deployment time from 4 hours to 12 minutes',
                    'Achieved 99.99% uptime with zero-downtime deployments',
                    'Implemented auto-scaling reducing infrastructure costs by 40%'
                ],
                'type' => 'Enterprise Project',
                'status' => 'Live'
            ],
            [
                'title' => 'Multi-Cloud Infrastructure',
                'description' => 'Designed and implemented multi-cloud disaster recovery solution for financial services company.',
                'image' => 'https://images.pexels.com/photos/1148820/pexels-photo-1148820.jpeg?auto=compress&cs=tinysrgb&w=600',
                'technologies' => ['AWS', 'Azure', 'Terraform', 'Ansible', 'Vault'],
                'achievements' => [
                    'Built disaster recovery with 99.9% data consistency',
                    'Automated failover process reducing RTO to under 5 minutes',
                    'Achieved SOC 2 Type II compliance'
                ],
                'type' => 'Infrastructure Project',
                'status' => 'Completed'
            ]
        ];
    }

    public function getServices()
    {
        return [
            [
                'title' => 'Cloud Migration & Architecture',
                'description' => 'Complete cloud transformation services including assessment, migration strategy, and implementation.',
                'features' => [
                    'Multi-cloud architecture design',
                    'Legacy system modernization',
                    'Cost optimization strategies',
                    'Security and compliance setup'
                ],
                'price' => 'From $5,000',
                'popular' => false
            ],
            [
                'title' => 'CI/CD Pipeline Development',
                'description' => 'Automated deployment pipelines that reduce deployment time and increase reliability.',
                'features' => [
                    'Custom pipeline design',
                    'Automated testing integration',
                    'Zero-downtime deployments',
                    'Rollback strategies'
                ],
                'price' => 'From $3,000',
                'popular' => true
            ]
        ];
    }

    public function getCertifications()
    {
        return [
            'AWS Certified Solutions Architect - Professional',
            'Certified Kubernetes Administrator (CKA)',
            'HashiCorp Certified: Terraform Associate',
            'Azure DevOps Engineer Expert',
            'Google Cloud Professional DevOps Engineer'
        ];
    }
}
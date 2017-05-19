<?php

use Illuminate\Database\Seeder;

class JobTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'IT Transformation Consultant',
            'photo_id'=>7,
            'skill1'=>'critical thinking',
            'skill2'=>'progrmming',
            'skill3'=>'coordination',
            'skill4'=>'visiting Technical website',
            'description'=>'Amazon Web Services (AWS) is seeking a world-class technical leader and strategy advisor who is passionate about helping our customers achieve their most challenging business goals using AWS Services.
AWS IT Transformation Consultants enable customers to achieve their most challenging business and organizational goals through well-managed complex transformation of IT using strategic application of AWS cloud technologies. As a trusted customer advocate, IT Transformation Consultants help organizations understand, plan and implement best practices around advanced AWS-supported scenarios, and drive migrations of enterprise application workloads to AWS cloud. They develop cloud strategies based on IT standards, leading customers and partners over technical and business hurdles of cloud adoption using agile project management approaches.',
            'internest1'=>'cooking',
            'internest2'=>'hunting',
            'internest3'=>'fitness',
            'internest4'=>'reading microblog',
            'wage'=>600
        ]);


        DB::table('jobs')->insert([

            'user_id'=>1,
            'job_title'=>'Senior End User Computing specialist',
            'photo_id'=>6,
            'skill1'=>'management',
            'skill2'=>'marketing capacity',
            'skill3'=>'operating capacity',
            'skill4'=>'debug',
            'description'=>'Nestlé enjoys a reputation as one of the world’s largest FMCGs and a leader in nutrition, health and wellness. Our teams support the success of Nestlé’s most iconic brands, including Nescafé, Milo and Uncle Tobys.
We’re home to the largest business excellence IT program in the world. With teams spread throughout every region of the globe, our specialists work with a diverse range of people and cultures in many different locations. Our inclusive and high performance culture is a testament to the great training, development, rewards and recognition we extend to every member of our 5,000-strong Oceania workforce. And no matter where your team is based, you can be assured that you’ll be essential to - and fully integrated in - our operations.',
            'internest1'=>'cooking',
            'internest2'=>'printing',
            'internest3'=>'fitness',
            'internest4'=>'reading blogs',
            'wage'=>500

        ]);



        DB::table('jobs')->insert([

            'user_id'=>1,
            'job_title'=>'Software Engineer',
            'photo_id'=>8,
            'skill1'=>'integratingCapacity',
            'skill2'=>'progrmming',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'Software Engineer Job Responsibilities:
Develops information systems by designing, developing, and installing software solutions in conjunction with automated equipment..
Software Engineer Job Duties:
Determines operational feasibility by evaluating analysis, problem definition, requirements, solution development, and proposed solutions.
Implement software required to operate in conjunction with laser printing machines,
Documents and demonstrates solutions by developing documentation, flowcharts, layouts, diagrams, charts, code comments and clear code.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'visiting Technical website',
            'wage'=>600
        ]);


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Senior .Net Developer',
            'photo_id'=>9,
            'skill1'=>'integratingCapacity',
            'skill2'=>'coordination',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'DWS is one of Australia’s leading providers of technology and consulting services, and supports some of Australia’s largest organisations and the Australian Government.
Through long-term partnerships with our customers our 800 staff deliver solutions across the IT spectrum, with specialists working in big data, cloud computing, and enterprise architecture.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'reading blogs',
            'wage'=>800
        ]);

        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Salesforce Consultant/Business Analyst',
            'photo_id'=>12,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'At Arxxus, we work on some of the most innovative salesforce.com solutions in Australia. We are a strategic salesforce.com partner and a member of the salesforce.com ventures program. Our team has completed in excess of 1,000 successful customer engagements in ANZ.

We work as a team to deliver cutting edge cloud computing solutions to complex business challenges. Our goal with every customer is to deliver transformational outcomes through our core service offerings of cloud strategy, implementation and managed services.',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);

        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Postdoctoral Research Officer in Modelling of Excitonic Physics
Company Name RMIT University  Company Location Melbourne, AU',
            'photo_id'=>17,
            'skill1'=>'innovation',
            'skill2'=>'design',
            'skill3'=>'intergratingCapacity',
            'skill4'=>'playing game',
            'description'=>'Postdoctoral Research Officer in Modelling of Excitonic Physics
Job no: 557307
Work type: Full time - Fixed term/Contract
Categories: Research, Sciences, Education
Convenient central city location in Melbourne, the world’s most liveable city
Full time - Fixed term/Contract
$82,143 - $88,172 p.a. + 17% superannuation',
            'internest1'=>'management',
            'internest2'=>'reading newspaper',
            'internest3'=>'exercise',
            'internest4'=>'critical thinking',
            'wage'=>100
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'IT Helpdesk Support Technician',
            'photo_id'=>10,
            'skill1'=>'innovation',
            'skill2'=>'design',
            'skill3'=>'marketing capacity',
            'skill4'=>'visiting Technical website',
            'description'=>'L’Oréal Australia is part of the L’Oréal Group – the world’s largest pure beauty company with over 100 years of history and experience. We are a passionate team in a growing market, working to deliver our mission of Beauty for All through our local portfolio of 25 brands.
L’Oréal was founded by a scientist and we have always focused on cutting-edge research and innovation. Our innovation now also centres around the opportunity that the worldwide digital transformation provides and we are leaders in connecting beauty and technology.',
            'internest1'=>'management',
            'internest2'=>'reading newspaper',
            'internest3'=>'exercise',
            'internest4'=>'reading blogs',
            'wage'=>100
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Enterprise Solution Architect',
            'photo_id'=>54,
            'skill1'=>'programming',
            'skill2'=>'innovation',
            'skill3'=>'coordination',
            'skill4'=>'design',
            'description'=>'The Solution Architect will be responsible for leading Solution definition and development activities for key business development opportunities and internal solution development across the business.',
            'internest1'=>'reading Newspaper',
            'internest2'=>'visiting Technical website ',
            'internest3'=>'critical thinking',
            'internest4'=>'programming contest',
            'wage'=>677
        ]);



        DB::table('jobs')->insert([
            'job_title'=>'Scala + Bigdata Engineer',
            'photo_id'=>42,
            'skill1'=>'integratingCapacity',
            'skill2'=>'innovation',
            'skill3'=>'coordination',
            'skill4'=>'design',
            'description'=>'We\'re looking for a Scala Developer/Big Data engineer to entrust with the interesting technical challenges involved in creating and growing our product. You’ll be working with devs from data science, data engineering, backend, web and UX backgrounds to build Anna, an automated data scientist who is already beginning to transform how businesses use data. You’ll also be a huge advocate for Scala and Spark best practices, mentoring the team and helping to get the most out of our stack.',
            'internest1'=>'reading Newspaper',
            'internest2'=>'critical thinking',
            'internest3'=>'exercise',
            'internest4'=>'programming contest',
            'wage'=>400
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'Service Desk Analyst',
            'photo_id'=>45,
            'skill1'=>'integratingCapacity',
            'skill2'=>'independent learning',
            'skill3'=>'coordination',
            'skill4'=>'debug',
            'description'=>'We are now managing the support of the End User Computing environment of a new customer which has created exciting career opportunities for people wishing to join our newly established Customer Service team in our Docklands office as Service Desk Analysts.',
            'internest1'=>'meditation',
            'internest2'=>'playing game',
            'internest3'=>'fitness',
            'internest4'=>'reading blogs',
            'wage'=>400
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Senior SDE',
            'photo_id'=>76,
            'skill1'=>'management',
            'skill2'=>'marketing capacity',
            'skill3'=>'operating capacity',
            'skill4'=>'debug',
            'description'=>'Following Microsoft’s mission to empower every person and every organization on the planet to achieve more, the DX GISV Technical Evangelism and Development (TED) team enables top companies and ISVs around the world to create scalable, resilient and efficient software solutions applying a smart mix of different technologies and platforms, including cloud computing, highly scalable data engines, hybrid networking and distributed messaging systems.',
            'internest1'=>'cooking',
            'internest2'=>'printing',
            'internest3'=>'fitness',
            'internest4'=>'reading blogs',
            'wage'=>500
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Communications, Media & Technology – Cloud Advisory ',
            'photo_id'=>69,
            'skill1'=>'management',
            'skill2'=>'marketing capacity',
            'skill3'=>'operating capacity',
            'skill4'=>'debug',
            'description'=>'Join Accenture and help transform leading organizations and communities around the world. The sheer scale of our capabilities and client engagements and the way we collaborate, operate and deliver value provides an unparalleled opportunity to grow and advance. Choose Accenture, and make delivering innovative work part of your extraordinary career.',
            'internest1'=>'cooking',
            'internest2'=>'printing',
            'internest3'=>'fitness',
            'internest4'=>'reading blogs',
            'wage'=>500
        ]);

        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Senior Devops Engineer (AWS)',
            'photo_id'=>45,
            'skill1'=>'critical thinking',
            'skill2'=>'progrmming',
            'skill3'=>'coordination',
            'skill4'=>'visiting Technical website',
            'description'=>'We have an exciting new 8 week contract role based in Mascot with our Client for a Senior Devops Engineer. You will need to have proven skills with AWS. Ideal start date is 5th June.

The role:

This role’s primary purpose is to deliver cloud solutions that ensure customer and internal requirements are met. This will require a proven ability to deliver on time and on budget complex technical solutions in multiple roles or projects.',
            'internest1'=>'cooking',
            'internest2'=>'hunting',
            'internest3'=>'fitness',
            'internest4'=>'reading microblog',
            'wage'=>600
        ]);


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'UX/UI Designer',
            'photo_id'=>48,
            'skill1'=>'integratingCapacity',
            'skill2'=>'progrmming',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'We are currently searching for a UX/UI Designer to join our Melbourne Development team. Our ideal candidate is comfortable working at C level to help identify, define and implement solutions. Kloud\'s consultants are comfortable the latest technology,&ndash; they cherish, and are proud of, their deep and wide scope of experience and don\'t want to lose those skills by being trapped in meetings all day.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'visiting Technical website',
            'wage'=>600
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Technical Writer',
            'photo_id'=>49,
            'skill1'=>'integratingCapacity',
            'skill2'=>'coordination',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'Melbourne CBD Location
6 Month Contract Role
ASAP start date
A Technical Writer job working for a Australian Insurance Firm in Melbourne CBD.
Your new company
You will be working for an up and coming Australian Insurance Firm. A Technical Writer is required to work on a 6 month initial contract.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'reading blogs',
            'wage'=>900
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Account Executive General Business',
            'photo_id'=>54,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'Salesforce is looking for an Account Executive to join one of our successful sales teams. This is a combination BDM and Account Manager opportunity where you will be selling into the General Business segment (specifically 400-1250 seats). It will involve you positioning our best in class solutions across CRM, Service Cloud, Platform and more to businesses looking to transform their processes.',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'Account Executive (Req 1980)',
            'photo_id'=>535,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'The Account Executive will work in the development of new HPC & Life Sciences accounts. The Account Executive is required to be in front of the end user, even if not selling direct, to build the relationship and share the DDN story. This position will be field based and involve travel approximately 30%-40% of the time. The job involves managing a territory and growing business through their own experience, including previously established relationships; so a successful applicant must have strong industry contacts and a demonstrated success in personally closing business in the HPC & Life Sciences space. Success involves a long and complex sales cycle and the majority of sales go through channel partners; so strong contacts with related channels are a requirement.',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'IaaS Sales Executive - Canberra and Sydney roles
Company Name Oracle  Company Location Canberra, Australia',
            'photo_id'=>535,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'Does being a part of helping clients go through digital transformations and moving to the cloud excite you? Do you have a passion for helping organizations on their journey to the cloud, to secure, improve, move and govern their data capital assets both on-premise and on the cloud? Does cutting through short term ambiguity for longer term vision come as second nature to you?',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);

        DB::table('jobs')->insert([
            'job_title'=>'vmware(nsx) linux sme (aws)',
            'photo_id'=>535,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'A leading organisation within the financial domain has exponentially expanded; therefore, there is a need for an experienced VMware Linux SME to fill a Permanent – Full-time position based in Melbourne. Work with a team made up of skilled resources and creative thinkers, to elevate the organisation to new heights.?',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);






        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Senior Desktop Support Engineer',
            'photo_id'=>45,
            'skill1'=>'critical thinking',
            'skill2'=>'progrmming',
            'skill3'=>'coordination',
            'skill4'=>'visiting Technical website',
            'description'=>'Equifax powers the financial future of individuals and organisations around the world, using its strength of unique trusted data, technology and innovative analytics. Equifax offer their customers world leading insights and knowledge to help them make informed decisions.
Are you looking for the next step in your career? Enjoy working in a smaller office environment, but like to work for a Corporate Company with a great work life balance? Equifax should be your next career move. We are looking for a Senior Desktop Engineer to join our talented and innovative IT team based at our modern Melbourne CBD office.
',
            'internest1'=>'cooking',
            'internest2'=>'hunting',
            'internest3'=>'fitness',
            'internest4'=>'reading microblog',
            'wage'=>600
        ]);


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'National Business Development Manager',
            'photo_id'=>45,
            'skill1'=>'critical thinking',
            'skill2'=>'progrmming',
            'skill3'=>'coordination',
            'skill4'=>'visiting Technical website',
            'description'=>'
MLO (Medico Legal Opinions) is currently seeking an experienced, passionate and creative Business Development Manager to manage and grow both existing and new customer relationships..',
            'internest1'=>'cooking',
            'internest2'=>'hunting',
            'internest3'=>'fitness',
            'internest4'=>'reading microblog',
            'wage'=>600
        ]);


        DB::table('jobs')->insert([
            'user_id'=>1,
            'job_title'=>'Data Scientist',
            'photo_id'=>9,
            'skill1'=>'integratingCapacity',
            'skill2'=>'coordination',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'Data Scientist
Job Number: 10056962-001
Employment Type: Permanent Full Time, Flexible
Location: VIC: Melbourne - CBD, VIC: Melbourne - Suburbs
Opening date: 01/05/2017 12:00 AM AEST
Closing date: 22/05/2017 11:55 PM AEST
The world around us is changing, and hopefully you\'ve noticed that Telstra is changing too. We\'re putting the customer at the centre of everything we do, and we need your help to do that.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'reading blogs',
            'wage'=>800
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'Java Developer',
            'photo_id'=>42,
            'skill1'=>'integratingCapacity',
            'skill2'=>'innovation',
            'skill3'=>'coordination',
            'skill4'=>'design',
            'description'=>'Greetings from Aricent !!

Aricent is a global design and engineering company innovating for the digital era. With more than 12,000 talented designers and engineers and over 25 years of experience, we help the world\'s leading companies solve their most important business and technology innovation challenges - from Customer to Chip. Learn more about us at www.aricent.com',
            'internest1'=>'reading Newspaper',
            'internest2'=>'critical thinking',
            'internest3'=>'exercise',
            'internest4'=>'programming contest',
            'wage'=>400
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'EOI Senior Cloud Solution Architect (Sydney/Melbourne)',
            'photo_id'=>54,
            'skill1'=>'marketing capacity',
            'skill2'=>'coordination',
            'skill3'=>'operating capacity',
            'skill4'=>'playing game',
            'description'=>'As Senior Cloud Solution Architect you will be the Senior Technical leader and subject matter expert for one of our major accounts within the Financial Services industry. You will be paired with Senior Seller as part of your sales team. You will be accountable for the overall technology strategy, opportunity identification and overall client success for Cloud Solutions for your clients. In partnership with the Seller you will prospect, generate leads, progress those leads and own the opportunities uncovered from a technical perspective. In this role you will be responsible for detailed solution design and technical accelerators such as Proof of Concepts ect. and differentiating IBM Cloud solutions vs competitor solutions. You will direct technical resources from the Business Units to design and scale cohesive solutions for your clients.',
            'internest1'=>'management',
            'internest2'=>'programming contest',
            'internest3'=>'exercise',
            'internest4'=>'independent learning',
            'wage'=>900
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'ITSM Business Anlayst / Delivery Manager',
            'photo_id'=>69,
            'skill1'=>'management',
            'skill2'=>'marketing capacity',
            'skill3'=>'operating capacity',
            'skill4'=>'debug',
            'description'=>'Our client is seeking an implementation consultant with relevant skills and experience, delivering \'hands-on\' implementation of the ITSM Tool / product as part of ITIL® /ITSM projects.

The ITSM Consultant is a key team member responsible for delivering successful ITSM implementation engagements. The Consultant is laser focused on the implementation of ITIL® based ITSM solutions featuring a fully integrated ITSM application and complimentary gateways. Leading both local and interstate implementations, the successful candidate is accountable for customer satisfaction reflected through the quality of the implementation and the overall customer experience.',
            'internest1'=>'cooking',
            'internest2'=>'printing',
            'internest3'=>'fitness',
            'internest4'=>'reading blogs',
            'wage'=>500
        ]);


        DB::table('jobs')->insert([
            'job_title'=>'Support Officer, Technical and Corporate Services',
            'photo_id'=>49,
            'skill1'=>'integratingCapacity',
            'skill2'=>'coordination',
            'skill3'=>'management',
            'skill4'=>'playing game',
            'description'=>'This Includes Services To Departments And Agencies Using Our
The newly created Technology Services Group (TSG) provides many of the services previously offered by the former Shared Services Centre (SSC).
IT network; client computing and application hosting platforms; property operations services; procurement; and information and records management.
Within this exciting and dynamic operational context, the group is seeking to fill a range of IT, administration, contact centre, property, procurement and records management positions across all of its four branches.',
            'internest1'=>'critical thinking',
            'internest2'=>'backetball',
            'internest3'=>'debug',
            'internest4'=>'reading blogs',
            'wage'=>900
        ]);


    }
}

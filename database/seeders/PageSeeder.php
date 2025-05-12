<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::updateOrCreate(
            ['slug' => 'privacy-policy'],
            ['title' => 'Privacy Policy', 'content' => '<div class="legal-inf-block">
            <div class="h3-block">
                <h3>UTECH INNOVATIONS OÜ Privacy Commitment</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">At UTECH INNOVATIONS OÜ, located at Ehitajate tee 110, 13517, Tallinn, Estonia, VAT №: EE102780448, Registration №: 16650622, we are deeply committed to safeguarding your online privacy. We prioritize the protection of the information you entrust us with. Our privacy standards are crafted around the General Data Protection Regulation (GDPR) established by the European Union. We gather your personal details to enhance our offerings, interact with our website visitors, facilitate online transactions, deliver user-requested data, offer services pertaining to our domain, and conduct other activities elaborated further</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Handling and Preservation of Personal Data</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Your personal data is gathered and managed only upon receiving your explicit consent. With this agreement, we might amass and oversee the following details: full name, birthdate, email ID, phone number, photographs, bank card details, and social media credentials. This data is meticulously treated in line with European Union and Cyprus directives.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Modifying, Retaining, and Erasing Data</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Any individual sharing their personal details with UTECH INNOVATIONS OÜ retains the rights to modify or erase them and can retract their consent to handle this data. The duration for which we retain your personal information aligns with commercial and taxation mandates. Once the data processing ends, it will be permanently deleted by our team. To review your personal details, reach out to our team at <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a>. Data sharing with third parties will occur strictly with your consent. If shared with a third entity outside our network, we cannot amend that data.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Technical Visit Data Management</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">When you visit our website, records like IP address, visiting time, browser preferences, operating system, and other tech specifics are saved. This information is vital to ensure our website content is accurately displayed, and it doesn&#x27;t allow for user identification.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Minors and Data Privacy</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Parents or legal custodians of children below the legal age, if aware that their ward has shared personal data without their approval, are advised to inform us at <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a>. Input of minors&#x27; personal data is prohibited without consent from their guardians.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Usage of Cookies</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Cookies, small data packets, enhance our website&#x27;s display and user experience. Stored on your device, they aid the website in recalling your preferences such as language and previously accessed pages, enriching subsequent visits. The reception and blocking of cookies can be personalized in your browser. However, limiting cookies might affect website functionality.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Third-Party Data Handling</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Our platform uses independent third-party services like Google Analytics and Facebook.com, which collate data. These services might share the data internally for personalized ad targeting. We recommend reviewing these entities&#x27; user agreements. For instance, to decline Google Analytics data collection, use the Opt-out Browser Add-on. Except for the services mentioned, we don&#x27;t share personal details with any external agency. On rare occasions, on a legal mandate, certain authorities might request access to this data.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>External Website Links</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">UTECH INNOVATIONS OÜ may feature links to external platforms beyond our purview. We aren&#x27;t accountable for their content. It&#x27;s advisable to peruse the privacy policies of such platforms.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Privacy Policy Modifications</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Occasionally, we might update our privacy measures. All amendments will be highlighted on this page. In sync with the evolving personal data laws in the EU and Cyprus, we&#x27;ll notify users who&#x27;ve shared their details about such changes. In case of incorrect contact details, notifications might not reach you.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>Queries and Concluding Statements</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">For any privacy-related concerns, connect with the UTECH INNOVATIONS OÜ team via <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a> or use the website&#x27;s designated contact form. If our privacy norms don&#x27;t align with your perspective, we advise against utilising our services and suggest refraining from visiting our platform.</div>
                </div>
            </div>
        </div>']
        );

        Page::updateOrCreate(
            ['slug' => 'user-agreement'],
            ['title' => 'User agreement', 'content' => '<div class="legal-inf-block">
            <div class="text-block gap-24">
                <h3>1. General provisions of the User Agreement</h3>
                <div class="text-block gap-16">
                    <h4><strong>1.1. The following terms and definitions shall apply in this document and the Parties&#x27; relations arising from or related to it:</strong></h4>
                    <ul role="list" class="list-legal-block">
                        <li class="list-item">
                            <div class="legal-text">Platform - software and hardware integrated with the Administration Website</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">User - a legally capable natural person who has joined this Agreement in his/her own interest or acting on behalf and in the interests of a legal entity represented by him/her.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Administration Website/Site - Internet sites located in the hirehere.io domain and its subdomains.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Service - a set of services and licence provided to the User using the Platform.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Agreement - this Agreement with all additions and amendments.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Work Hour - a conditional unit of labour input estimation of the executor&#x27;s work on the User&#x27;s task.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Customer - a Service User who is looking for a qualified specialist to fulfill his/her tasks.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Specialist - A person with certain technical qualifications, who is also a service user, but is ready to perform the Customer&#x27;s task for a fee.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">Arbitration - a section of the Service, where by means of qualified external expertise, the rightness of one of the parties in disputes between the Customer and the specialist is assessed.</div>
                        </li>
                    </ul>
                </div>
                <div class="flex-vertical">
                    <h4>1.2. Your use of the Service in any way and in any form within the limits of its declared functionality, including:</h4>
                    <div class="legal-text">viewing the materials posted on the Site; registration and/or authorisation on the Site; posting or displaying on the Site any materials, including but not limited to such materials as: texts, hypertext links, images, audio and video files, information and/or other information; creates a contract under the terms of this Agreement in accordance with the provisions of Spanish law.</div>
                </div>
                <div class="flex-vertical">
                    <h4>1.3. By using any of the above scenarios to use the Service you confirm that:<br></h4>
                    <ul role="list" class="list-legal-block">
                        <li class="list-item">
                            <div class="legal-text">You have read the terms of this Agreement in full before using the Service.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">You accept all the terms of this Agreement in full without any exceptions or limitations on your part and undertake to comply with them or stop using the Service. If you do not agree with the terms of this Agreement or do not have the right to conclude an agreement based on them, you should immediately stop any use of the Service.</div>
                        </li>
                        <li class="list-item">
                            <div class="legal-text">The Agreement (including any of its parts) may be changed by the Administration without any special notice. The new version of the Agreement comes into force from the moment of its posting on the Administration&#x27;s website or bringing to the User&#x27;s attention in another convenient form, unless otherwise provided by the new version of the Agreement.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-block gap-16">
                <h3>2. General conditions of use of the Service</h3>
                <div class="legal-text"><strong>2.1.</strong> The use of the functional capabilities of the Service is allowed only after the User has registered and authorised on the Website in accordance with the procedure established by the Administration.</div>
                <div class="legal-text"><strong>2.2.</strong> The technical, organisational and commercial terms of use of the Service, including its functionality, shall be brought to the Users&#x27; attention by means of a separate posting on the Site or by notification of the Users.</div>
                <div class="legal-text"><strong>2.3.</strong> The login and password chosen by the User are necessary and sufficient information for the User&#x27;s access to the Site. The User has no right to transfer his login and password to third parties, and bears full responsibility for their safety, independently choosing the method of their storage.</div>
            </div>
            <div class="text-block gap-16">
                <h3>3. Procedure and rules for the Customer to hire specialists.</h3>
                <div class="legal-text"><strong>3.1.</strong> The Customer has the right to hire one or several specialists for piecework work on the tasks of his IT project. Before hiring a specialist, the User is obliged to familiarise himself with the specialist&#x27;s qualifications and make sure that they are sufficient for the performance of his tasks.</div>
                <div class="legal-text"><strong>3.2.</strong> The Customer has the right to reserve a specialist for a certain number of hours to be spent monthly on the fulfilment of his tasks, however, if the Customer has not been able to assign tasks for the required number of hours specified earlier, the hours for which no tasks have been assigned will be considered as worked and will not be refunded.</div>
                <div class="legal-text"><strong>3.3.</strong> The Customer has no right to set tasks for a specialist beyond the scope of his qualification and specificity of work for which he was selected.</div>
                <div class="legal-text"><strong>3.4. </strong>The Customer has the right to set any number of tasks, but understands that they will be performed by the specialist in the order of priority. The Customer has no right to demand from the Specialist to fulfil tasks in a greater volume than specified when hiring the Specialist.</div>
                <div class="legal-text"><strong>3.5.</strong> The Customer understands that the evaluation of the task in hours is made by the Specialist, but the administration of the service does its best to make this evaluation objective and equal to the evaluation by another Specialist of the same qualification. The Customer has the right to agree or disagree with the evaluation of the task until the moment of its fulfilment, as well as to challenge it in the Arbitration of the service.</div>
                <div class="legal-text"><strong>3.6. </strong>If the customer agrees with the evaluation of the task and sends it to the workload, by indicating the corresponding status, then he can no longer refuse this task, unless the deadlines were grossly violated, namely more than 7 working days or the performer failed to cope with the task.</div>
                <div class="legal-text"><strong>3.7. </strong>If the Specialist has failed to fulfil the task or the deadlines have been grossly violated, the customer has the right to refuse to pay for the task and request a recalculation for the next billing period or a refund for the specific task. The Customer has no right to dispute and request a refund for the tasks already accepted by the Customer, if a period of more than 14 calendar days have passed.</div>
                <div class="legal-text"><strong>3.8. </strong>After the Specialist has submitted the task for review with the corresponding status, the Customer is obliged to review it within 2 working days and either accept it or reject it with arguments. In case of rejection, the task should be revised by the specialist at his own expense. However, the customer should understand that the rejection of the task must be reasoned and legitimate, namely, include a description of specific errors in the work and or discrepancy with the description of the task. If there is a dispute, the parties have the right to appeal to the Arbitration Service.</div>
                <div class="legal-text"><strong>3.9. </strong>The Customer has the right to change the configuration of the team at any time for not started works, but he cannot reduce the number of hours already paid for. He can change the number of hours downward only in the next period, which is equal to 30 calendar days from the start of the team configuration.</div>
                <div class="legal-text"><strong>3.10. </strong>The Customer has the right to add his team members to the configuration. In this case the service is not responsible for such specialists, and the customer makes all calculations with them independently. The customer also controls that these specialists do not interfere with the work of the service specialists, but supplement the team with the necessary competences.</div>
                <div class="legal-text"><strong>3.11. </strong>The customer receives all copyrights for the works performed by the service executors within the framework of work on the customer&#x27;s projects. The service guarantees that the specialists will not have copyright on the product created by them, unless otherwise agreed in the individual conditions.</div>
                <div class="legal-text"><strong>3.12. </strong>If for reasons beyond the control of the customer, the specialist leaves the project, the Administration of the service will do everything possible to find an equivalent replacement as soon as possible, but does not guarantee it. In case of impossibility to find a replacement in this situation, the funds paid for the specialist&#x27;s hours will be returned to the customer&#x27;s account balance.</div>
                <div class="legal-text"><strong>3.13. </strong>The Parties have agreed that if in the course of work performance the Specialist has a need to provide the Customer with information materials (or other data necessary for the Specialist’s work performance), the Specialist notifies the Customer in writing and indicates what materials are necessary for work performance, as well as the preferred terms within which these materials should be provided by the Customer. If the Customer fails to provide information within 3 working days, the Specialist has the right to hold off the work on this task.</div>
                <div class="legal-text"><strong>3.13.1. </strong>If the Specialist lacks information for the task implementation, and the Customer has not provided it within 3 working days, the Specialist has the right to stop work on this task and switch to the next one.</div>
                <div class="legal-text"><strong>3.13.2. </strong>A task with the status, lacking information, is considered not delivered and is not subject to fulfilment within the 30-day period.</div>
                <div class="legal-text"><strong>3.14. </strong>The Customer understands that tasks assigned later than 10 days before the end of the 30 day period may not be completed by the Specialist within this period, due to the inability to meet the deadline, but the Specialist undertakes to make every effort to complete all assigned tasks. The Client also understands that the hours for which he has hired the Specialist are evenly spent by him throughout the period and the Client endeavours to distribute the tasks evenly throughout the month.</div>
                <div class="legal-text"><strong>3.14.1. </strong>Three (3) days before the end of the 30 day period of the period, the customer undertakes to have on his account the necessary amount of funds to pay for the next period of the selected configuration. This amount will be blocked until the end of the next period.</div>
                <div class="legal-text"><strong>3.14.2. </strong>On the last day of the 30 day period, the reserved amount will be debited with the amount corresponding to the tasks performed by the specialists. The tasks that have not been performed due to the fault of the Specialist will not be subject to payment and the Customer has the possibility to either make a refund of this amount by written request to <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a>, or if this has not been done, this amount will be automatically transferred to the next period.</div>
                <div class="legal-text"><strong>3.14.3. </strong>If the Customer has set tasks for fewer hours than the number of hours reserved for specialists in the configuration, the Customer understands that these hours will be considered spent and cannot be refunded. However, he has the right to write a request to hello@hirehere.io to transfer unused hours and the Administration will do its best to satisfy this request, but cannot guarantee it.</div>
                <div class="legal-text"><strong>3.15. </strong>The Customer understands that the Administration of the Service provides intermediary services, checks the skills and qualifications of specialists, but cannot be held responsible for other aspects of the relationship between the Customer and the Specialist. The Customer understands that this is his responsibility. However, the Service is obliged to sign with each specialist NDA to protect the data of the customer, with an example of this document, the customer can familiarise himself in his personal cabinet. As well as download it after adding a specialist to the configuration.</div>
                <div class="legal-text"><strong>3.16. </strong>The Customer undertakes not to develop with the help of the service and Specialists projects or materials contrary to the legislation of the country where this project will operate.</div>
                <div class="legal-text"><strong>3.17. </strong>The Customer undertakes under no circumstances to offer the Specialist to work outside the HireHere Service or in any other way to establish personal relations with him for the purpose of obtaining benefits for one of the parties. If such a fact is revealed, the Customer undertakes to pay compensation to the Administration of the service in the amount of 100 hours of the cost by the hour of the specialist in the service. As well a suit can be filed for damages.</div>
                <div class="legal-text"><strong>3.18. </strong>If the Customer has received an offer of work or payments outside the service from the Specialist or members of his team, he is obliged to immediately inform the Administration of the site by means of a message to <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a>, labelled &quot;Unfair actions of the Specialist&quot; with the description of the situation.</div>
            </div>
            <div class="text-block gap-16">
                <h3>4. The order of payment and acceptance of works for the Customer when hiring specialists.</h3>
                <div class="legal-text"><strong>4.1. </strong>The Customer makes a 100% prepayment for the number of hours required for his project from his personal account in the service. The total number of hours, the customer specifies and confirms independently when creating the team configuration and selecting the workload of Specialists.</div>
                <div class="legal-text"><strong>4.2. </strong>Payment for the required hours is made every 30 days according to the set team configuration settings (total number of hours of specialists and their qualification). If 7 days before the end of the 30-day period, the customer has not paid for the next period, he loses the team and the service does not guarantee that he will be able to collect the same specialists again due to switching them to other projects.</div>
                <div class="legal-text"><strong>4.3. </strong>If the customer has started the team, he has the right to change the number of specialists upwards at any time, if there is such an opportunity. However, a downward change before the end of the paid period can only take place with the consent of the service. If such consent is not obtained, the customer can remove the specialists not needed or reduce the load of existing specialists, and the released hours can be spent at his discretion on other specialists within the current payment period.</div>
                <div class="legal-text"><strong>4.4. </strong>At the end of the 30 day period, the next period will take into account the current configuration of the team, unless the customer has created another configuration to replace the current one.</div>
                <div class="legal-text"><strong>4.5. </strong>By accepting the tasks from the specialists, the customer agrees that the work has been completed for the hours spent. And confirms that there are no claims. However, if an error is detected within 14 days, the customer has the right under the warranty obligations to request the correction of the identified defects.</div>
                <div class="legal-text"><strong>4.6. </strong>At the end of each 30 day period, the service sends a statement of completed work to the customer&#x27;s personal cabinet. The Customer is obliged to sign it with an electronic signature via sms. If it was not done within 7 working days, the act is considered signed and accepted by the customer.</div>
            </div>
            <div class="text-block gap-16">
                <h3>5. Force Majeure</h3>
                <div class="legal-text"><strong>5.1. </strong>The Parties shall be released from liability for partial or full non-fulfilment of their obligations under this Agreement, if such non-fulfilment was caused by force majeure circumstances, which arose after the conclusion of the Agreement as a result of extraordinary events, such as: earthquake, fire, flood, other natural disasters, epidemics, accidents, explosions, military actions, changes in legislation, resulting in the impossibility for the Parties to fulfil their obligations under this Agreement.</div>
            </div>
        </div>']
        );

        Page::updateOrCreate(
            ['slug' => 'cookies'],
            ['title' => 'Cookies', 'content' => '<div class="legal-inf-block">
            <div class="h3-block">
                <h3>1. Introduction</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">Cookies are small text files that are stored on your computer or mobile device when you visit a website. They are used to ensure that the website functions properly and to provide information to the owners of the site. This policy explains how and why we use cookies on the UTECH INNOVATIONS OÜ website.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>2. Categories of Cookies Used</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">We use the following categories of cookies on our website:</div>
                    <ul role="list" class="list-legal-block">
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Necessary Cookies:</strong> Essential for our website&#x27;s operation, enabling core functionalities such as security, network management, and accessibility.</div>
                        </li>
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Functional Cookies:</strong> Allow our website to remember your preferences, such as language or region, to provide a more personalized online experience.</div>
                        </li>
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Analytics Cookies:</strong> Collect information about how you interact with our site, helping us improve its performance and user experience.</div>
                        </li>
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Performance Cookies:</strong> Monitor the website&#x27;s performance, providing insights into how our online services are being used and how we can improve functionality.</div>
                        </li>
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Advertisement Cookies:</strong> Used to show you ads relevant to your interests and measure the effectiveness of advertising campaigns.</div>
                        </li>
                        <li class="list-item circles">
                            <div class="legal-text"><strong>Other Cookies:</strong> Miscellaneous cookies that might not fit into the above categories.</div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="h3-block">
                <h3>3. Third-party Cookies</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">We use services of third parties like Google Analytics, which set cookies on their behalf. The information from these cookies can be used by these third parties in accordance with their own privacy policies.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>4. Managing and Deleting Cookies</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">You can manage cookies through your browser settings. Here, you can choose to block or delete cookies, but note that doing so might negatively affect the functionality of our website.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>5. Changes to this Cookie Policy</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">We may revise this cookie policy from time to time. Any changes will be updated on this page, so please revisit this policy regularly.</div>
                </div>
            </div>
            <div class="h3-block">
                <h3>6. Contact</h3>
                <div class="text-block gap-16">
                    <div class="legal-text">For any questions about this cookie policy or our use of cookies, please contact us at:UTECH INNOVATIONS OÜEhitajate tee 110, 13517, Tallinn, EstoniaEmail: <a href="mailto:hello@getcapsules.ai" class="link-black">hello@getcapsules.ai</a>
                    </div>
                </div>
            </div>
        </div>']
        );

//        Page::updateOrCreate(
//            ['slug' => 'develop-generated-capsule'],
//            [
//                'title' => 'Сгенерированная капсула',
//                'content' => '',
//                'price' => 10000,
//            ]
//        );

        Page::updateOrCreate(
            ['slug' => 'home'],
            [
                'title' => 'Home',
                'content' => '',
                'price' => null,
                'capsule_ids' => [],
            ]
        );
    }
}

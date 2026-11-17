<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/pages/patient.css"/>

<?php get_header(); ?>

<div class="header-page inpatient-header">
    <div class="header-content">
        <span><a href="<?php echo home_url('home'); ?>">Home</a> / Patient Information / In Patient</span>
        <h1>In Patient</h1>
    </div>
</div>

<main class="inpatient-page">
    <div class="container">

        <div class="main-layout">
            <aside class="sidebar" aria-label="In-patient information topics">
                <div class="sidebar-heading">
                    <span class="sidebar-icon" aria-hidden="true"><i class="fa-solid fa-book-medical"></i></span>
                    <div>
                        <span class="sidebar-eyebrow">Explore</span>
                        <h2 class="sidebar-title">In Patient Guide</h2>
                    </div>
                </div>

                <nav class="sidebar-nav" aria-label="Patient guide sections">
                    <ul>
                        <li><a href="#rooms-content">Rooms &amp; Services</a></li>
                        <li><a href="#emergency-content">Emergency Room Instructions</a></li>
                        <li><a href="#rights-content">Patients &amp; Families Rights</a></li>
                        <li><a href="#rights-responsibilities-content">Knowing Rights &amp; Responsibilities</a></li>
                        <li><a href="#respect-content">Respect &amp; Appreciation</a></li>
                        <li><a href="#privacy-content">Privacy &amp; Confidentiality</a></li>
                        <li><a href="#safety-content">Protection &amp; Safety</a></li>
                        <li><a href="#healthcare-plan-content">Participation in Healthcare Plan</a></li>
                        <li><a href="#treatment-refusal-content">Refusal of Treatment</a></li>
                        <li><a href="#insurance-content">Material Costs &amp; Insurance</a></li>
                        <li><a href="#forms-content">Forms &amp; Reports</a></li>
                        <li><a href="#complaints-content">Complaints &amp; Suggestions</a></li>
                        <li><a href="#donation-content">Organ &amp; Tissue Donation</a></li>
                        <li><a href="#responsibility-content">Responsibility of Families</a></li>
                    </ul>
                </nav>
            </aside>

            <article class="content-area">
                <section id="rooms-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Rooms &amp; Services</span>
                        <h2>Rooms &amp; Services</h2>
                        <p>Comfortable surroundings and attentive care designed to support every stage of recovery.</p>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-talent.webp'; ?>" alt="Comfortable hospital room and patient services">
                    </figure>
                    <p>
                        At Jubha Hospitals we are committed to provide quality care at the highest levels. To ensure optimal patient experience and a convenient atmosphere for swift recovery, all our rooms are equipped with the latest advanced medical equipment and well trained medical staff along with the essential entertainment and comfort facilities needed by the patient. Other than the regular shared and private rooms, luxurious VIP suites are also available at AGH Khobar and AGH Jubail for the most premium healthcare experience.
                    </p>
                </section>

                <section id="emergency-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Emergency Care</span>
                        <h2>Emergency Room Instructions</h2>
                        <p>Important steps and safety guidance for patients and attendants in the emergency department.</p>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-emergency.webp'; ?>" alt="Hospital emergency department">
                    </figure>
                    <ol class="emergency-steps">
                        <li>After registration at the concerned department, you are requested to wait until you are invited to the triage room where your case will be evaluated.</li>
                        <li>After entering the triage room, the nurse will inform you of the priority of your case and how long you are expected to wait to see the doctor.</li>
                        <li>
                            <strong>The priority of an examination by the doctor follows international standards.</strong>
                            <span class="list-subtitle">Triage Color System:</span>
                            <ul class="mission-list">
                                <li>Expanding across various regions of the Kingdom to provide outstanding, patient-centered care that is close to home.</li>
                                <li>Launching advanced and integrated care models based on outcomes and service quality.</li>
                                <li>Embracing digital transformation and technological innovation to support virtual care and simplify the patient journey through intelligent systems.</li>
                                <li>Investing in national talent and developing future-ready medical and administrative leaders.</li>
                                <li>Strengthening strategic partnerships with both public and private sectors to ensure seamless and integrated healthcare services.</li>
                            </ul>
                        </li>
                        <li>For your safety and the safety of others, no more than one attendant is allowed with each patient.</li>
                        <li>Mobile phones are not allowed in the department.</li>
                        <li>Taking pictures is not allowed in the department.</li>
                        <li>Attendants are to strictly stay with the patient inside the room.</li>
                        <li>Privacy of other patients is to be respected at all times.</li>
                    </ol>
                </section>

                <section id="rights-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Patient Rights</span>
                        <h2>Patients &amp; their Families have the Right to Health Care</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-whatsapp.webp'; ?>" alt="Patients and their families receiving healthcare">
                    </figure>
                    <ul class="mission-list">
                        <li>Obtaining appropriate, continuous, structured and specialized “evidence-based medicine” health service at every level of care, whether preventive or curative, and in a timely manner, in accordance with treatment eligibility policies and procedures and within the facility’s capacity and the laws regulating its operation.</li>
                        <li>Examined by a specialized medical team.</li>
                        <li>Providing the appropriate environment that helps patient’s healing during the treatment period in the health facility.</li>
                        <li>Giving priority in treatment to emergency cases without delay.</li>
                        <li>Providing medical care in diagnosis, treatment and other services in a manner that achieves the aspirations and satisfaction of patients as much as possible.</li>
                        <li>Ensuring that the patient or his legal guardian is fully aware of all information related to the patient’s health condition and status in a clear and adequate manner and in an understandable language.</li>
                        <li>Provide an appropriate mechanism for education and guidance on drug treatment and other treatments.</li>
                        <li>Receiving the appropriate assessment of pain when the patient is admitted to the facility and on an ongoing basis.</li>
                        <li>Provide adequate nutrition and appropriate to the patient health condition.</li>
                        <li>Participating with the medical team in the treatment plan and make decisions regarding patient health condition.</li>
                        <li>Providing information upon discharge about health condition.</li>
                        <li>Providing an interpreter (if available) if language barrier present a problem of understanding the details of the care and treatment.</li>
                    </ul>
                </section>

                <section id="rights-responsibilities-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Patient Rights</span>
                        <h2>Knowing the Rights and Responsibilities of Patients &amp; their Families</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/banner3.webp'; ?>" alt="Patient and family responsibilities">
                    </figure>
                    <ul class="mission-list">
                        <li>Understanding and fully exercise the rights, and provide all possible means inside and outside the facility to introduce the document of patients’ rights and responsibilities, and provide an electronic or paper copy upon entering the facility or registering in it, in the health service provision departments and waiting areas.</li>
                    </ul>
                </section>

                <section id="respect-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Respectful Care</span>
                        <h2>Healthcare Services &amp; Care based on Respect &amp; Appreciation</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-talent.webp'; ?>" alt="Respectful healthcare services">
                    </figure>
                    <ul class="mission-list">
                        <li>Providing adequate health care at all times and under all circumstances in a way that preserves their dignity without compromising their religious, doctrinal and spiritual beliefs and their cultural and social background.</li>
                        <li>Use the appropriate Islamic and social etiquette when dealing directly with patients and their families in general and using the patient’s personal name on official papers and not being given any other definition.</li>
                        <li>Respect the patient's right to express the severity of pain.</li>
                        <li>Providing dignified care to the patient in cases of death and dying, and proper handling of the corpse.</li>
                    </ul>
                </section>

                <section id="privacy-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Patient Rights</span>
                        <h2>Privacy &amp; Confidentiality</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-cardiology.webp'; ?>" alt="Privacy and confidentiality">
                    </figure>
                    <ul class="mission-list">
                        <li>Providing privacy and confidentiality when discussing the patient’s treatment program, whether with him or his legal guardian.</li>
                        <li>Preventing circulation or access to patient information, whether in the medical file and medical information related to diagnosis, analysis and treatment to any party or person without the consent of the patient or his legal guardian (except as required by judicial authorities).</li>
                        <li>Preventing access to the patient’s medical file for non-members of the medical team supervising the treatment, or those authorized by the management of the facility, or those authorized by the patient or his guardian, or the judicial authorities.</li>
                        <li>Prevent meeting of anyone who is not related to the patient, or provision of healthcare, including visitors.</li>
                        <li>Preparing places for admission, examination and medical procedures, taking all possible measures to preserve privacy.</li>
                        <li>Providing the patient with appropriate clothing and necessary personal tools.</li>
                        <li>Provide suitable and separate waiting areas for women and men.</li>
                    </ul>
                </section>

                <section id="safety-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Patient Safety</span>
                        <h2>Protection &amp; Safety</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-emergency.webp'; ?>" alt="Protection and safety">
                    </figure>
                    <ul class="mission-list">
                        <li>Providing health care in a safe, clean and sterile environment.</li>
                        <li>Providing the appropriate tools and mechanisms to protect them from physical harm, diseases and infection, such as washing hands and providing safety precautions before and during entry or transportation to, from and inside the health facility facilities, and before starting any medical procedure.</li>
                        <li>Applying the infection control rules approved by the Ministry of Health systems to protect patients from infection.</li>
                        <li>Ensuring that the service provider follows the safety guidelines before, during and after the medical procedure or examination, and the patient has the right to remind him of that or to request a change.</li>
                        <li>Clarify by all explanatory means that patients and their families can understand before and during entering all places that may expose the patient and his family to harm, such as areas of radiation, magnetic resonance imaging, places under construction, while performing cleaning or sterilization operations, and others.</li>
                        <li>Providing security and safety to protect people with special needs such as children, the elderly, women.</li>
                        <li>Protecting them from psychological harm, reprimand and insults by any employee of the health facility.</li>
                        <li>The medical team is obligated to report all cases of physical or psychological violence to the concerned party.</li>
                        <li>Provide appropriate places, mechanisms and procedures to protect their property from theft and damage.</li>
                        <li>Smoking is prohibited in all health facilities.</li>
                        <li>Providing special procedures for people with special needs (in terms of assistance, facilitating procedures, providing appropriate facilities, parking, number of people accompanying the patient, etc.).</li>
                        <li>Verify the identity of the guardian, or the person authorized by the patient to sign on his behalf.</li>
                    </ul>
                </section>

                <section id="healthcare-plan-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Care Planning</span>
                        <h2>Participation in the Healthcare Plan</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-whatsapp.webp'; ?>" alt="Participation in the healthcare plan">
                    </figure>
                    <ul class="mission-list">
                        <li>Enable the patient and their families to communicate with the treatment team to obtain complete and updated information regarding the diagnosis, the proposed treatment, its expected benefits, the expected results, and knowledge of suggested medical alternatives. Also, complications, risks, and the probability of treatment success in the language they understand.</li>
                        <li>Clarify transparently the possibilities of care available in the health facility for patients who need care that exceeds the capabilities of the facility, inform them of other services and their responsibilities, and strive to provide this with the competent authorities.</li>
                        <li>Knowing the names of the participants in providing the health service to them, their specializations, and the name of the doctor responsible for the treatment and follow-up of the case before carrying out any treatment procedure.</li>
                        <li>Inform them of the presence of licensed trainees if they are part of the treating medical team.</li>
                        <li>Discuss with the medical team about the necessary information before any therapeutic procedure or operation and before signing the medical consent form, except for emergency cases that require medical intervention in accordance with the applicable laws and regulations.</li>
                        <li>The patient's knowledge of the types of interventions, drugs and radiation used in treatment, also their effectiveness, safety and security.</li>
                        <li>Clarify the reasons for transferring the patient to another place inside or outside the health facility before the transfer and giving him the necessary instructions.</li>
                        <li>Request to take another medical opinion in coordination with the competent authority in the health facility when necessary.</li>
                        <li>Clarify the reasons for transferring or changing patient care from one consultant to another.</li>
                    </ul>
                </section>

                <section id="treatment-refusal-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Treatment Decisions</span>
                        <h2>Refusal of Treatment</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-intensive-care.webp'; ?>" alt="Treatment decisions">
                    </figure>
                    <ul class="mission-list">
                        <li>Informing the patient of the possibility of refusing all or part of the prescribed treatment in a manner that does not conflict with the applicable laws and regulations and informing them of the expected results of the refusal decision. Also, the follow-up to the treatment instructions, with the need from them to sign the acknowledgment form for the scheduled procedure and document this in the patient's file.</li>
                        <li>The refusal of treatment should not result in any decisions or procedures that are not related to the patient’s health status. The service provider in the health facility is obligated to continue providing him with appropriate care, even during the times of the visit for the same disease or other in accordance with the medical standards followed.</li>
                        <li>Inform the patient of other alternative treatments in the event of refusal.</li>
                    </ul>
                </section>

                <section id="insurance-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Costs &amp; Coverage</span>
                        <h2>Material Costs &amp; Health Insurance</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/about.webp'; ?>" alt="Healthcare costs and insurance">
                    </figure>
                    <ul class="mission-list">
                        <li>Obtain approximate information on the expected cost before starting treatment.</li>
                        <li>Identify the limits of health insurance coverage available to the patient and the consequences thereof.</li>
                        <li>Answer all inquiries related to the treatment bill, regardless of who will pay it.</li>
                        <li>Issuing an accurate bill for the services provided and their costs.</li>
                        <li>Having a board for those who are eligible for treatment.</li>
                        <li>Having a billboard describing in a simplified manner the services and their costs.</li>
                        <li>The beneficiary is informed about the deductible pay, and any additional payments to the beneficiary, before receiving the service.</li>
                        <li>The beneficiary signs an agreement for paying additional services, outside the scope of their insurance policy, before receiving the service.</li>
                        <li>The beneficiary is provided with an itemized service bill for additional services when requested.</li>
                        <li>The beneficiary is granted a free-of-charge room upgrade in the event of the non-availability of the insurance policy-assigned room.</li>
                    </ul>
                </section>

                <section id="forms-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Documents</span>
                        <h2>Clarity &amp; Comprehensiveness of Forms &amp; Reports</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-pathology.webp'; ?>" alt="Medical forms and reports">
                    </figure>
                    <ul class="mission-list">
                        <li>Authorizing a person to sign on the medical authorization and to take decisions on their behalf, when necessary, with their knowledge and the full consent of the patient.</li>
                        <li>Introducing the patient to the information contained in the medical consent in a clear manner and in an understandable language, with an explanation of the expected negative and positive results as a result of the approval or rejection. With a list of interventions that need separate medical permission and keeping the medical permission in the patient's file.</li>
                        <li>Giving medical reports proving his condition and justifying periods of absence from work.</li>
                    </ul>
                </section>

                <section id="complaints-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Feedback</span>
                        <h2>Policies &amp; Procedures for Complaints &amp; Suggestions</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/hero-talent.webp'; ?>" alt="Policies for complaints and suggestions">
                    </figure>
                    <ul class="mission-list">
                        <li>Submit oral or written suggestions, requests, inquiries, or complaints, signed or not, to the health facility, without any impact on the quality of service provided to them, with the possibility of raising a complaint to various levels in the health facility.</li>
                        <li>Knowing of policies and procedures for handling complaints that include defining the entity or entities authorized to receive complaints in the facility, determining the complaints path and the policy followed in the treatment, then submitting periodic reports to all levels on complaints, actions taken, final answers to patients and their satisfaction with that, and studying and analyzing complaints and their causes and corrected.</li>
                        <li>Informing them to the policies, procedures, and mechanisms used in the health facility to study complaints and suggestions, and the expected time to respond to them. Informing them about any available information regarding the complaints or suggestions and expediting the resolution of complaints.</li>
                    </ul>
                </section>

                <section id="donation-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Donation</span>
                        <h2>Policies &amp; Procedures for Organ &amp; Tissue Donation</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/specialty-cardiology.webp'; ?>" alt="Organ and tissue donation">
                    </figure>
                    <ul class="mission-list">
                        <li>You have the right to donate organs or tissues to one of your family members or others, and to have advice that shows the benefits and risks. You should contact the Saudi Center for Organ Transplantation (SCOT) phone number: <a href="tel:8001245500">8001245500</a>.</li>
                    </ul>
                </section>

                <section id="responsibility-content" class="tab-panel" tabindex="-1">
                    <header class="content-header">
                        <span class="content-kicker">In Patient / Responsibilities</span>
                        <h2>Responsibility of Patients and their Families</h2>
                    </header>
                    <figure class="featured-image">
                        <img src="<?php echo get_template_directory_uri() . '/asset/images/almana/banner3.webp'; ?>" alt="Responsibilities of patients and their families">
                    </figure>
                    <ul class="mission-list">
                        <li>Providing health care in a safe, clean and sterile environment.</li>
                        <li>Providing the appropriate tools and mechanisms to protect them from physical harm, diseases and infection, such as washing hands and providing safety precautions before and during entry or transportation to, from and inside the health facility facilities, and before starting any medical procedure.</li>
                        <li>Applying the infection control rules approved by the Ministry of Health systems to protect patients from infection.</li>
                        <li>Ensuring that the service provider follows the safety guidelines before, during and after the medical procedure or examination, and the patient has the right to remind him of that or to request a change.</li>
                        <li>Clarify by all explanatory means that patients and their families can understand before and during entering all places that may expose the patient and his family to harm, such as areas of radiation, magnetic resonance imaging, places under construction, while performing cleaning or sterilization operations, and others.</li>
                        <li>Providing security and safety to protect people with special needs such as children, the elderly, women.</li>
                        <li>Protecting them from psychological harm, reprimand and insults by any employee of the health facility.</li>
                        <li>The medical team is obligated to report all cases of physical or psychological violence to the concerned party.</li>
                        <li>Provide appropriate places, mechanisms and procedures to protect their property from theft and damage.</li>
                        <li>Smoking is prohibited in all health facilities.</li>
                        <li>Providing special procedures for people with special needs (in terms of assistance, facilitating procedures, providing appropriate facilities, parking, number of people accompanying the patient, etc.).</li>
                        <li>Verify the identity of the guardian, or the person authorized by the patient to sign on his behalf.</li>
                    </ul>
                </section>
            </article>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const defaultTarget = '#rooms-content';
    const topicLinks = document.querySelectorAll('.sidebar-nav a');
    const contentArea = document.querySelector('.content-area');

    // Keep the visible topic and navigation state synchronized for keyboard and screen-reader users.
    function updateActiveTopic() {
        const requestedTarget = window.location.hash;
        const hasKnownTarget = Array.from(topicLinks).some(function (link) {
            return link.getAttribute('href') === requestedTarget;
        });
        const currentTarget = hasKnownTarget ? requestedTarget : defaultTarget;

        contentArea.classList.toggle('has-target', hasKnownTarget);

        topicLinks.forEach(function (link) {
            const isCurrent = link.getAttribute('href') === currentTarget;
            link.classList.toggle('is-active', isCurrent);

            if (isCurrent) {
                link.setAttribute('aria-current', 'page');
            } else {
                link.removeAttribute('aria-current');
            }
        });
    }

    window.addEventListener('hashchange', updateActiveTopic);
    updateActiveTopic();
});
</script>

<?php get_footer(); ?>

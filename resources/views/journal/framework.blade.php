@extends('layouts.appss')

@section('title')
    The Framework
@endsection

@section('content')

    <section class="awards-area pos-rel pt-100 pb-40">
        <div class="container" bis_skin_checked="1">
            <div class="row align-items-center" bis_skin_checked="1">
                <div class="col-xl-5 col-lg-6" bis_skin_checked="1">
                    <div class="awards-wrapper" bis_skin_checked="1">
                        <div class="section-title text-left mb-75" bis_skin_checked="1">
                            {{--                            <h6 class="left_line pl-55">Awards</h6>--}}
                            <h2>
                                SoRiL’s Risk Leadership Framework
                            </h2>
                            <p>
                                Risk leadership is business leaders' (board and senior management members)
                                responsibility to steer their company's risk agenda.
                                Without risk leadership, a company lacks the overall vision, direction, knowledge,
                                and values needed to shape its approach to risk management.
                            </p>
                        </div>

                        <style>
                            ul, li{
                                margin-bottom: 5px!important;
                                color: #0a0f16;
                            }
                        </style>

                        <div class="faq-wrapper" bis_skin_checked="1">
                            <div class="faq-tab" bis_skin_checked="1">
                                <div id="accordion" bis_skin_checked="1">

                                    <div class="card card-02 mb-15" bis_skin_checked="1">
                                        <div class="card-header" id="headingOne" bis_skin_checked="1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="false"
                                                        aria-controls="collapseOne">
                                                    Demonstration of Ethical Leadership
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                             data-parent="#accordion" bis_skin_checked="1" style="">
                                            <div class="card-body" bis_skin_checked="1">
                                                <ul style="list-style-type: disc; margin-left: 40px;">
                                                    <li> &#8226;
                                                        Ethical risk-taking and management of risks should be
                                                        demonstrated through leaders' actions and decisions.
                                                    </li>
                                                    <li>
                                                        &#8226;
                                                        This involves taking risk and managing risks for the common good
                                                        (seeking to protect the interests of all stakeholder) based on
                                                        the principles of fairness, honesty, transparency, and
                                                        accountability.
                                                    </li>
                                                    <li>
                                                        &#8226;
                                                        It Occurs during strategy planning and execution
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card card-02 mb-15" bis_skin_checked="1">
                                        <div class="card-header" id="headingTwo" bis_skin_checked="1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                    Definition and Implementation of Risk Appetite
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordion" bis_skin_checked="1" style="">
                                            <div class="card-body" bis_skin_checked="1">
                                                <ul style="list-style-type: disc; margin-left: 40px;">
                                                    <li>
                                                        &#8226;
                                                        The definition and implementation of the company's risk appetite is
                                                        about establishing the nature and extent of the
                                                        risks an organisation “aspires” to take to achieve its objectives.
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It applies in strategy development;
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It is objective-focused: It must be aligned with the specific
                                                        objectives and strategic intent of the organisation.
                                                        <span style="font-style: italic; font-size: 14px">
                                                        (Some companies prefer to articulate appetite according to a common
                                                    risk taxonomy that is based on common characteristics of risk. This
                                                    approach emphasises acceptable levels of risk given the unique
                                                    consideration of each type of risk. However, this approach may
                                                    result in a company managing risk in silos. The risk
                                                    leadership approach integrates risk and risk management
                                                    performance—focusing on the desired outcome--not the undesired
                                                    outcome--regardless of where the risk may originate in the entity.)
                                                    </span>
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It is implemented through the formulation statements regarding the
                                                        overall organisational risk
                                                        appetite and its specific risk appetite applicable to each
                                                        objectives; and communicating the risk appetite statements
                                                        throughout the
                                                        company.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card card-02 mb-15" bis_skin_checked="1">
                                        <div class="card-header" id="headingThree" bis_skin_checked="1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                    Creation of the Risk Culture
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordion" bis_skin_checked="1">
                                            <div class="card-body" bis_skin_checked="1">
                                                <ul style="list-style-type: disc; margin-left: 40px;">
                                                    <li>
                                                        &#8226;
                                                        It occurs during strategy execution (To be successfully implemented,
                                                        risk appetite and risk tolerance
                                                        require an awareness about them and adherence to them or a conducive
                                                        risk culture to be established in the company.)
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        This entails championing the risk appetites and leading by example
                                                        in their application through actions and decision-making.
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        With a conducive risk culture, each member of the company is
                                                        clear on what is acceptable and what is not, whether in relation to
                                                        behaving unethically, pursuing the wrong objectives, or encountering
                                                        too much risk in pursuing the right strategies and objectives.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card card-02 mb-15" bis_skin_checked="1">
                                        <div class="card-header" id="headingFour" bis_skin_checked="1">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false"
                                                        aria-controls="collapseFour">
                                                    Guidance of the Execution of Risk Management
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                             data-parent="#accordion" bis_skin_checked="1">
                                            <div class="card-body" bis_skin_checked="1">
                                                <ul style="list-style-type: disc; margin-left: 40px;">
                                                    <li>
                                                        &#8226;
                                                        It is about ensuring that those who are responsible for managing
                                                        risk operate
                                                        within the mandate of keeping risks within risk tolerance limits or
                                                        acceptable deviations from risk appetite levels.
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It applies during the execution of strategy
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It involves approving the organisation’s risk tolerance limits;
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It considers risk tolerance limits through the lenses of risk
                                                        appetite;
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It emphasises on the use of KRIs as basis for risk assessment
                                                        (identification and evaluation);
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It approves the KRIs’ thresholds to detect risks (deviations from
                                                        risk appetite) to monitor risk management performance;
                                                        Applies at any level of the business;
                                                    </li>

                                                    <li>
                                                        &#8226;
                                                        It is risk-focused (considers specific risks)
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6" bis_skin_checked="1">
                    <div class="award" bis_skin_checked="1">
                        <div class="awards__img pl-60" bis_skin_checked="1">
                            <img src="{{asset('assets/img/framework.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

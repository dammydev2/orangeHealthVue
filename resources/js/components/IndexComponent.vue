<template>
  <div class="row">
    <!-- end templatemo navigation -->
    <div class="col-md-12">
      <section id="home" class="text-center">
        <div class="templatemo_headerimage">
          <div class="flexslider">
            <ul class="slides">
              <li>
                <img :src="'/images/slider/health.jpg'" alt="Slide 1" />
                <div class="slider-caption">
                  <div class="templatemo_homewrapper">
                    <h1>Orange health Initiative</h1>
                    <!-- <h2>Web Design &amp; code your dream</h2> -->
                    <a
                      href="#portfolio"
                      class="smoothScroll templatemo-slider-btn btn btn-default"
                      onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'
                      >Donate</a
                    >
                  </div>
                </div>
              </li>
              <li>
                <img :src="'/images/slider/health.png'" alt="Slide 2" />
                <div class="slider-caption">
                  <div class="templatemo_homewrapper">
                    <h1>Making quality Healthcare Accessible to ALL</h1>
                    <!-- <h2>Work on all modern browsers, IE 10+</h2> -->
                    <a
                      href="#team"
                      class="smoothScroll templatemo-slider-btn btn btn-default"
                      onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'
                      >Donate</a
                    >
                  </div>
                </div>
              </li>
              <li>
                <img :src="'/images/slider/image.png'" alt="Slide 3" />
                <div class="slider-caption">
                  <div class="templatemo_homewrapper">
                    <h1>Health is life...Health is everything</h1>
                    <!-- <h2>unsplash.com, flexslider, bootstrap, jquery</h2> -->
                    <a
                      href="#about"
                      class="smoothScroll templatemo-slider-btn btn btn-default"
                      onclick='document.getElementById("contact").scrollIntoView({behavior: "smooth"});'
                      >Donate</a
                    >
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- start templatemo features -->
      <section id="features" class="features text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              <h2>Vision</h2>
              <p>
                Making Quality <span class="blue"> Healthcare</span
                ><span class="green"> Available</span> to All
              </p>
            </div>
            <div class="col-md-12"></div>
            <div class="col-sm-6 col-md-3">
              <a href="#"><i class="fa fa-ambulance"></i></a>
              <h3>Quality in Health</h3>
              <!-- <p>Providing quality healthcare in both primary and secondary healthcare services.</p> -->
            </div>
            <div class="col-sm-6 col-md-3">
              <a href="#"><i class="fa fa-hospital-user"></i></a>
              <h3>Primary & Secondary Healthcare Services</h3>
              <!-- <p>Etiam elementum laoreet mauris. Ut rutrum feugiat neque. Cum sociis natoque penatibus et magnis dis parturient montes.</p> -->
            </div>
            <div class="col-sm-6 col-md-3">
              <a href="#"><i class="fa fa-briefcase-medical"></i></a>
              <h3>Appropriate Technology</h3>
              <!-- <p>Ut rutrum feugiat neque. Etiam elementum laoreet mauris. Cum sociis natoque penatibus et magnis dis parturient montes.</p> -->
            </div>
            <div class="col-sm-6 col-md-3">
              <a href="#"><i class="fa fa-clinic-medical"></i></a>
              <h3>Health Determinant Improvement</h3>
              <!-- <p>Cum sociis natoque penatibus et magnis dis parturient montes. Etiam elementum laoreet mauris. Ut rutrum feugiat neque.</p> -->
            </div>
          </div>
        </div>
      </section>
      <!-- end templatemo features -->
      <!-- start templatemo about -->
      <section id="about" class="">
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
              <h2>ABOUT US</h2>
              <p>
                Orange Health Initiative (OHI) is a non-governmental healthcare
                service foundation passionate about making QUALITY HEALTHCARE
                AFFORDABLE AND ACCESSIBLE to a large spectrum of people
                especially the vulnerable and less privileged in line with the
                Objective of the Sustainable Development Goal (SDG)Universal
                Health Coverage(UHC) . OHI renders healthcare services and
                support to the most in need groups in Nigeria including
                children, Women adults and the elderly.<span id="dots">...</span
                ><span id="more">
                  <br />
                  We are a consortium of Medical, Global and Public Health as
                  well as Project Management Expert who are passionate and want
                  to make Quality healthcare Accessible and Affordable to the
                  most vulnerable groups and we continue to advocate as well as
                  innovate to proffer solutions to access to quality healthcare
                  and financing. OHI progammes, though diverse, cuts across two
                  main themes, Healthcare Access and Healthcare Financing, this
                  theme covers the 5 main domains of Public Health Viz,
                  Epidemiology, Health Promotion, Health Administration,
                  Bio-Statistics, and Occupational and Environmental health.
                  <br />
                  Our team of experts is Men and Women with National, Pan
                  African and Global experience.
                </span>
              </p>
              <button
                onclick="myFunction()"
                class="smoothScroll templatemo-slider-btn btn btn-default"
                id="myBtn"
              >
                Read more
              </button>
            </div>
            <div class="col-md-12"></div>
            <div class="col-sm-6 col-md-6 info">
              <h3>We are COMPOSITE</h3>
              <h4>Orange Health Initiative</h4>
              <p>
                Orange health initiative is looking at providing healthcare for
                the needy and less priviledge, most especially the old and
                infirm in the society particularly those suffering from one
                terminal illness or the other
              </p>
              <p>
                Your donation(s) goes a long way into making this a reality as
                you help consider the fact that most Nigerians have little or no
                solid access to good health care and are are being affected by
                some terminal illness. <a href="">donate now</a>
              </p>
            </div>
            <div class="col-sm-6 col-md-6 skills">
              <span>Quality in Health</span>
              <span class="pull-right"></span>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                ></div>
              </div>
              <span>Primary and Secondary Healthcare Services</span>
              <span class="pull-right"></span>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                ></div>
              </div>
              <span>Appropriate Technology in healthcare</span>
              <span class="pull-right"></span>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                ></div>
              </div>
              <span>Health Determinant Improvement</span>
              <span class="pull-right"></span>
              <div class="progress">
                <div
                  class="progress-bar progress-bar-success"
                  role="progressbar"
                  aria-valuenow="80"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 100%"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end templatemo about -->
      <!-- start templatemo team -->
      <section id="team" class="text-center">
        <div class="container team-container">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <h2>OUR PROGRAMMES</h2>
              <p>
                Project Gray: Project Gray, our flagship medical outreach, is
                targeted to impact lives and minds of the senior citizens who
                are in need of care. OHI recognizes and identifies with the
                challenges of our ageing communities in terms of access to
                qualitative affordable health care, exclusion from public and
                private health insurance benefit, difficulty in accessory
                pension and gratuity as well as lonesomeness. We also recognize
                the critical role that older people have played and can still
                play in national development even in old age and we have
                dedicated one of our core programs to meet this need. Project
                Gray 1.0 and 2.0 has attended to over 1600 senior citizens
                already in its third year. Healthcare Partnerships/ Hospital
                Franchising: We work to developed initiatives and partnerships
                with health care providers in order to strategically increase
                access of the elderly, children, and women to quality
                healthcare. We have successfully partnered with Veteran
                Hospital, the first private geriatric hospital in Nigeria and a
                multispecialty hospital rendering cutting edge services to
                senior citizens in Nigeria.
              </p>
              <p>
                Senior Citizens Health Fund: SCHIF is our innovative health
                insurance scheme which is taking shape and set to launch soon.
                We have successfully initiated process and dialogues to
                establish the Senior Citizens Health Fund which would help meet
                the healthcare financing needs of the above 60 who are left out
                of the traditional health insurance schemes.
              </p>
              <p>
                Advocacy: OHI champions advocacy to increase access to quality
                and affordable healthcare of the most neglected population
                groups. For more than 3 years, we have championed speaking up
                for the elderly and aged in Nigeria. We have also effectively
                brought to the notice of the public the need to celebrate the
                contributions of our senior citizens and to give back to them by
                celebrating the World Elders Day (instituted by UN /WHO) in
                Nigeria. We also conduct workshops and seminars to promote
                health literacy in different settings.
              </p>
              <p>
                Healthcare Programs Support: OHI in line with its mission to
                increase access to healthcare helps other NGOs, civil society
                groups and professional groups working in the healthcare space.
                OHI provides strategic planning and consulting, program/ project
                management, medical outreach coordination and fund raising
                services to help other organizations consolidate on their
                strengths and achieve their goals. OHI leverages on its network
                of experienced professionals, partners and sponsors to help
                others succeed.
              </p>
            </div>
            <!-- <div class="col-md-12"></div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 1">
                    <h3>Dr. Kunle Megus</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 2">
                    <h3>Dr Larry</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 3">
                    <h3>Dr Desmond</h3>
                </div>
                <div class="col-sm-6 col-md-3">
                    <img src="{{ asset('images/doctor.jpg') }}" class="img-responsive" alt="team 4">
                    <h3>Dr Rachel</h3>
                </div> -->
          </div>
        </div>
      </section>
      <!-- end templatemo team -->
      <!-- start templatemo portfolio -->
      <section id="portfolio" class="">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <h2>OUR PROJECTS</h2>
              <p>
                <b
                  >AJEGUNLE SOCIAL HEALTH PROGRAMME(ASHIP) <br />
                  1. ORANGE HEALTH MEDICAL CENTRE.
                </b>
              </p>
              <p>
                <b>Project Goal:</b> To improve the Quality Life (QoL) of the
                People of Ajegunle in Ajeromi Ifelodun LGA) through the set up a
                Sustainable, Accessible and Affordable, Quality Healthcare
                system with 60% of a population of 500,000 people registered in
                3 yrs ( 2020 to 2023) that address the healthcare need as well
                as the Social determinant of ill health of the people
              </p>
              <p><b>Project Objectives</b></p>
              <div class="col-md-6 text-justify">
                <li>
                  To address the Social determinant of health of the registered
                  population through Entrepreneurial and Research Scheme-
                  Ajegunle Entrepreneurial Development and Research Scheme
                  (A-EDRS)
                </li>
                <li>
                  To establish a Demand Creation , Social Marketing as well as
                  Customer Services that registers 60% of the population,
                  captures and retain 80% of the customers between 2020 to 2023)
                  through a Ajegunle -Mobile Community Health Scheme (A-MCHESH)
                </li>
              </div>
              <div class="col-md-6 text-justify">
                <li>
                  To establish a Community Health Scheme that registers 60%
                  (300,000) of the people -Ajegunle Community Health Scheme
                  (A-CHS)
                </li>
                <li>
                  To establish a Community Health Centre that give quality,
                  affordable and accessible primary and secondary health
                  services to the people ( Orange Health Clinic)
                </li>
                <li>
                  To establish a Public Health Promotion and Prevention Scheme
                  as a model of a sustained Health Financing model (A-PHPPS)
                </li>
              </div>
            </div>
            <div class="col-md-12"></div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p1.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p2.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p3.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p4.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p5.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p6.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p7.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="image_thumb">
                <img
                  :src="'/images/p8.jpg'"
                  class="img-responsive"
                  alt="work"
                />
                <div class="image_overlay">
                  <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end templatemo portfolio -->

      <!-- start templatemo contact -->
      <section id="contact" class="">
        <div class="container">
          <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center">
              <h2>DONATE</h2>
              <p>
                Your donations gooes a long way to make the access of Nigerians
                to free health care a reality, be rest assured that your funds
                will be well maximised.
              </p>
            </div>
            <div class="col-md-12"></div>
            <!-- <div class="col-sm-6 col-md-4 address">
                    <h3>OUR ADDRESS</h3>
                    <p><i class="fa fa-phone"></i> 090-080-0980</p>
                    <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                    <p><i class="fa fa-globe"></i> <a href="#">http://www.company.com</a></p>
                    <p><i class="fa fa-map-marker"></i> 360 Aenean Quis Semper, Maecenas 10450</p>
                </div> -->
            <div class="col-sm-6 col-md-12">
              <form
                action=""
                id="form"
                @submit.prevent="checkForm"
                method="post"
                role="form"
              >
              <p v-if="errors.length" class="col-md-12 alert alert-danger">
                    <b>Please correct the following error(s):</b>
                    <ul>
                    <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </p>
                <div class="col-md-12"></div>
                <div class="col-md-6">
                  <input
                    type="text"
                    v-model="name"
                    class="form-control"
                    name="name"
                    
                    placeholder="Name"
                  />
                </div>
                <div class="col-md-6">
                  <input
                    type="email"
                    v-model="email"
                    class="form-control"
                    name="email"
                    
                    placeholder="Email"
                  />
                </div>
                <div class="col-md-6">
                  <input
                    type="number"
                    v-model.number="amount"
                    min="500"
                    class="form-control"
                    name="amount"
                    placeholder="Amount (minimum of 500 [amount is in naira])"
                  />
                </div>
                <div class="col-md-6">
                  <input
                    type="text"
                    v-model="phone"
                    class="form-control"
                    name="phone"
                    placeholder="Phone number"
                  />
                </div>
                <div class="col-md-12">
                  <textarea
                    class="form-control"
                    v-model="message"
                    rows="6"
                    name="message"
                    placeholder="Message (optional)"
                  ></textarea>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="DONATE" class="form-control" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- end templatemo contact -->

      <!-- start templatemo footer -->
      <footer class="text-center">
        <div class="container">
          <div class="row">
            <div class="social_icon">
              <a href="#" class="fa fa-facebook"></a>
              <a
                href="https://twitter.com/ORANGEHEALTH2"
                class="fa fa-twitter"
              ></a>
              <a
                href="https://www.instagram.com/orangehealthinitiative/"
                class="fa fa-instagram"
              ></a>
              <a
                href="mailto:orangehealth12@gmail.com"
                class="fa fa-envelope"
              ></a>
              <a href="" class="fa fa-phone"></a>09098989098
            </div>
          </div>
          <p>Copyright © {{ new Date().getFullYear() }} OrangeHealth</p>
        </div>
      </footer>
      <!-- end templatemo footer -->

      <a href="#top" class="go-top"
        ><i class="fa fa-chevron-up fa-1x" style="margin-top: 20px"></i
      ></a>
    </div>

    <!-- <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Index Component</div>

              <div class="card-body">
                  I'm an Index component.
              </div>
          </div>
      </div> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      errors: [],
      name: null,
      email: null,
      amount: null,
      phone: null,
      message: null,
    };
  },
  methods: {
    checkForm: function (e) {
      if (this.name) {
        return true;
      }

      this.errors = [];

      if (!this.name) {
        this.errors.push("Name required.");
      }
      if (!this.email) {
        this.errors.push('Email required.');
      } else if (!this.validEmail(this.email)) {
        this.errors.push('Valid email required.');
      }
      if(!this.amount){
          this.errors.push('amount is required');
      }else if(this.amount < 500){
          this.errors.push('amount must be greater or equals to 500.');
      }

      console.log(this.data)

      e.preventDefault();
    },
    validEmail: function (email) {
      var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
  },
};
</script>
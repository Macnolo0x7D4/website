import React from "react";

//import 'bootstrap/dist/css/bootstrap.min.css';

import '../styles/theme.min.css'
import '../styles/master.css'

import Navbar from '../components/navbar'
import Footer from '../components/footer'

import Jumbotron from '../components/jumbotron'
import Contact from '../components/contact-form'

export default () => (
  <React.Fragment>
    <header>
      <Navbar/>
    </header>
    <main className="page landing-page">
      <Jumbotron/>
    </main>
    <Footer/>
  </React.Fragment>
)

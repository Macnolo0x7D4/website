import React from 'react'

import '../styles/theme.min.css'
import '../styles/master.css'

import Navbar from '../components/navbar'
import Footer from '../components/footer'

import Contact from '../components/contact-form'

export default () => (
  <React.Fragment>
    <header>
      <Navbar/>
    </header>
    <main className="page landing-page">
      <Contact/>
    </main>
    <Footer/>
  </React.Fragment>
)

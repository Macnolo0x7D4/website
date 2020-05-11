import React from "react"
import { Helmet } from "react-helmet"

import "../styles/theme.min.css"
import "../styles/master.css"

import { Application } from "./application.js"
import { ContactForm } from "../components/contact-form.js"

export default () => (
  <React.Fragment>
    <Application title="Contact Us - Macnolo Tech">
      <ContactForm/>
    </Application>
  </React.Fragment>
)

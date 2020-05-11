import React from "react"

import "../styles/theme.min.css"
import "../styles/master.css"

import "../utils/fontawesome.js"

import Application from "./application.js"
import ContactForm from "../components/contact-form.js"

export default () => (
  <React.Fragment>
    <Application title="Contact Us - Macnolo Tech">
      <ContactForm/>
    </Application>
  </React.Fragment>
)

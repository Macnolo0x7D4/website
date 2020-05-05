import React from 'react'

import { Navbar } from 'react-bootstrap'
import { Nav } from 'react-bootstrap'
import { Container } from 'react-bootstrap'
import { Image } from 'react-bootstrap'

export default () => (
  <Navbar bg="white" expand="lg" fixed="top" className="clean-navbar">
    <Container>
      <Navbar.Brand className="logo">
        <Image src="/logo/logo.png" width="40" className="navbar-img-logo"/>
        Macnolo Tech
      </Navbar.Brand>
      <Navbar.Toggle/>
      <Navbar.Collapse>
        <Nav className="ml-auto">
          <Nav.Item>
            <Nav.Link href="index.html">Home</Nav.Link>
          </Nav.Item>

          <Nav.Item>
            <Nav.Link href="features.html">Features</Nav.Link>
          </Nav.Item>

          <Nav.Item>
            <Nav.Link href="pricing.html">Pricing</Nav.Link>
          </Nav.Item>

          <Nav.Item>
            <Nav.Link href="about-us.html">About Us</Nav.Link>
          </Nav.Item>

          <Nav.Item>
            <Nav.Link href="contact-us.html">Contact Us</Nav.Link>
          </Nav.Item>
        </Nav>
      </Navbar.Collapse>
    </Container>
  </Navbar>
)

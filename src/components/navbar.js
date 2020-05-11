import React from "react"

import { Navbar } from "react-bootstrap"
import { Nav } from "react-bootstrap"
import { Container } from "react-bootstrap"
import { Image } from "react-bootstrap"

import { Link } from "gatsby"

export default () => (
  <Navbar bg="white" expand="lg" fixed="top" className="clean-navbar">
    <Container>
      <Navbar.Brand className="logo">
        <Image src="/logo.png" width="40" className="navbar-img-logo" />
        <p className="d-none d-sm-inline">Macnolo Tech</p>
      </Navbar.Brand>
      <Navbar.Toggle className="border-0" />
      <Navbar.Collapse>
        <Nav className="ml-auto">
          <Nav.Item>
            <Link className="nav-link" to="/">
              Home
            </Link>
          </Nav.Item>

          <Nav.Item>
            <Link className="nav-link">Features</Link>
          </Nav.Item>

          <Nav.Item>
            <Link className="nav-link">Pricing</Link>
          </Nav.Item>

          <Nav.Item>
            <Link to="about-us" className="nav-link">About Us</Link>
          </Nav.Item>

          <Nav.Item>
            <Link to="contact-us" className="nav-link">
              Contact Us
            </Link>
          </Nav.Item>
        </Nav>
      </Navbar.Collapse>
    </Container>
  </Navbar>
)

import React from "react"

import { Container } from "react-bootstrap"
import { Row } from "react-bootstrap"
import { Col } from "react-bootstrap"
import { Card } from "react-bootstrap"

export default (proc) => (
    <React.Fragment>
        <Col sm={6} lg={4}>
            <Card className="clean-card text-center">
                <Card.Img className="card-img-top w-100 d-block" src={proc.data.image_uri}/>
                <Card.Body className="info">
                    <Card.Title><h4>{proc.data.name}</h4></Card.Title>
                    <Card.Text>{proc.data.description}</Card.Text>
                    <div className="icons"><a href="https://www.youtube.com/channel/UCZJ7U7Kq6MVkKGIToUNI4HQ"><i class="icon-social-youtube"></i></a><a href="#"><i class="icon-social-instagram"></i></a><a href="#"><i class="icon-social-twitter"></i></a></div>
                </Card.Body>
            </Card>
        </Col>
    </React.Fragment>
)

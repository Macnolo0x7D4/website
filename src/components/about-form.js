import React from "react"

import { FontAwesomeIcon } from "@fortawesome/react-fontawesome"
import { Col } from "react-bootstrap"
import { Card } from "react-bootstrap"

export default proc => (
  <React.Fragment>
    <Col sm={6} lg={4}>
      <div className={proc.effect}>
        <Card className="clean-card text-center" key={proc.data.id}>
          <Card.Img
            className="card-img-top w-100 d-block"
            src={proc.data.image_uri}
          />
          <Card.Body className="info">
            <Card.Title>
              <h4>{proc.data.name}</h4>
            </Card.Title>
            <Card.Text>{proc.data.description}</Card.Text>
            <div className="icons">
              {proc.data.youtube_url !== "" ? (
                <a href={proc.data.youtube_url}>
                  <FontAwesomeIcon icon={["fab", "youtube"]} />
                </a>
              ) : (
                ""
              )}
              {proc.data.instagram_url !== "" ? (
                <a href={proc.data.instagram_url}>
                  <FontAwesomeIcon icon={["fab", "instagram"]} />
                </a>
              ) : (
                ""
              )}
              {proc.data.twitter_url !== "" ? (
                <a href={proc.data.twitter_url}>
                  <FontAwesomeIcon icon={["fab", "twitter"]} />
                </a>
              ) : (
                ""
              )}
              {proc.data.github_url !== "" ? (
                <a href={proc.data.github_url}>
                  <FontAwesomeIcon icon={["fab", "github"]} />
                </a>
              ) : (
                ""
              )}
              {proc.data.reddit_url !== "" ? (
                <a href={proc.data.reddit_url}>
                  <FontAwesomeIcon icon={["fab", "reddit"]} />
                </a>
              ) : (
                ""
              )}
            </div>
          </Card.Body>
        </Card>
      </div>
    </Col>
  </React.Fragment>
)

import React from "react"

import "../styles/theme.min.css"
import "../styles/master.css"

import "../utils/fontawesome.js"

import Application from "./application.js"
import AboutForm from "../components/about-form.js"

import { Container } from "react-bootstrap"
import { Row } from "react-bootstrap"

import { useStaticQuery, graphql } from "gatsby"

export default () => {
  	const profiles = useStaticQuery(graphql`
		query ProfilesQuery {
		  allProfileJson(sort: {fields: index, order: ASC}) {
		    nodes {
		      name
		      description
		      image_uri
		      github_url
		      twitter_url
		      reddit_url
		      youtube_url
		      instagram_url
		    }
		  }
		}
	`);
	return(
	  <React.Fragment>
	    <Application title="Contact Us - Macnolo Tech">
	    	<section class="clean-block about-us">
	    		<Container>
	    			<div class="block-heading">
	                	<h2 class="text-info">About Us</h2>
	                	<p>We are the Macnolo Tech Team</p>
	            	</div>
	            	<Row className="justify-content-center">
		            	{
		      				profiles.allProfileJson.nodes.map( profileData => (
		      					<AboutForm data={profileData}/>
		      				))
		      			}
	      			</Row>
	      		</Container>
	  		</section>
	    </Application>
	  </React.Fragment>
	)
}
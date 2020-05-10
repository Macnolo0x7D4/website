const path = require('path')

exports.createPages = async ({graphql, actions}) =>{
  actions.createPage({
    path: 'contact-us',
    component: path.resolve('./src/components/contact-form.js')
  })
}

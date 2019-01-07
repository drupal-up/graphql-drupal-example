import React, { Component } from 'react'
import ArticlesView from './ArticlesView.js';
import { ApolloClient, createNetworkInterface } from 'apollo-client';
import { ApolloProvider } from 'react-apollo';

const client = new ApolloClient({
  networkInterface: createNetworkInterface({
    uri: 'http://[YOUR_DRUPAL_INSTANCE_URL]/graphql'
  }),
});

class App extends Component {
  render() {
    return (
      <ApolloProvider client={client}>
        <ArticlesView />
      </ApolloProvider>

    );
  }
}

export default App;

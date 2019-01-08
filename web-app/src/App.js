import React, { Component } from 'react'
import ArticlesView from './ArticlesView';
import { ApolloClient, createNetworkInterface } from 'apollo-client';
import { ApolloProvider } from 'react-apollo';

const client = new ApolloClient({
  networkInterface: createNetworkInterface({
    uri: process.env.REACT_APP_DRUPAL_URL + '/graphql'
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

import React, { Component } from 'react'
import { ApolloClient, createNetworkInterface } from 'apollo-client';
import { ApolloProvider } from 'react-apollo';
import NodesView from './NodesView';

const client = new ApolloClient({
  networkInterface: createNetworkInterface({
    uri: process.env.REACT_APP_DRUPAL_URL + '/graphql'
  }),
});

class App extends Component {
  render() {
    return (
      <ApolloProvider client={client}>
        <NodesView />
      </ApolloProvider>
    );
  }
}

export default App;

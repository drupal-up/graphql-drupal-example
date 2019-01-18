import React from 'react';
import gql from 'graphql-tag';
import { Query } from 'react-apollo';

const GET_NODES = gql`
query riddleQuery {
	nodeQuery(filter:{conditions:{field: "type", value: "riddle", operator: EQUAL}}){
    entities {
      ... on NodeRiddle {
        nid
        question
        answer
      }
    }
	}
}
`;

const NodesView = () => (
			<Query query={GET_NODES}>
				{({ loading, error, data }) => {
					if (loading) return <div>Loading...</div>;
					if (error) return <div>Error :(</div>;
					return (
						<div>
							<ul>
								{
									data.nodeQuery.entities.map(
										node => <li key={node.nid}>
											<h3>{node.question}  <span role="img" aria-label="The answering unicorn." onClick={function() { alert(node.answer); }}>🦄</span> </h3>
										</li>
									)
								}
							</ul>
							<span className="info">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; * the answer lies in the unicorn</span>
						</div>
					)
				}}
			</Query>
    )

export default NodesView;

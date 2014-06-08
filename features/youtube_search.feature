Feature: Searching Youtube
  In order to find movie
  As a Youtube user
  I want to be able search movie by keywords

@javascript
Scenario: Using search engine
  Given I am on "/"
    And I should see "Youtube"
   When I fill in "search_query" with "Schubert op. 101"
    And I press "search-btn"
    And I wait
   Then I should see "Barry Lyndon"
Let us write up a research statement here for this exploratory GitHub analytics jam session.

To get us started, below is the substantive content from the email I sent on August 5th:

"Basically, the idea is to look at whether or how propagation of skills can be tracked with reference to the GitHub API.  For skills and occupation coding and data, check out: http://www.onetonline.org/   I am starting a close look at GitHub's support of deep tracking and reports for agile project management for opportunities to conduct other types of analytics including computational social science.  If you have not seen it, check out: https://developer.github.com/v3/activity/events/ and https://developer.github.com/v3/orgs/    Based on relationships with GitHub I believe I can gain access to some really hot GitHub data (the rate limit sucks when you hit the API cold off the street).  Consider the potential to see how team identify, rundown and solve errors and others problems based on GitHub issues (the ticketing system for bugs, etc) and compare that to the really rough (and apparently incorrect) estimation of troubleshooting by software developers listed at: http://www.onetonline.org/find/descriptor/result/2.B.3.k?a=1  (troubleshooting is what developers do all day long... and it can be revealed in new highly dimensional ways using combinations of GitHub and other online API sources .... eg contributions to Stack Overflow, etc).  

I'm interested to go through the GitHub API and formulate a research plan.  Based on that, I'll get access to the data (as much as I can) and ask Sandy about the best ways to collaborate.  If nothing else, the exercise of running through the API and testing some stuff will be educational, enriching and creatively stimulating.  And really fun!"

#Intro#

Understanding the propagation of skills is crucial to design better human systems, such as work teams. Here we propose to analyze the relationship between working dynamics and resulting productivity in teams of workers. We propose to understand the team building and functioning processes tracking the propagation of knowledge during the product development. To this end, we will analyze the collective activity in the online site GitHub. Here users build files and develop codes collaboratively, opening posibility to understand the nature of productive teams.

The analysis of data exhaust from human activity can reveal patterns across different scales, displaying the complex nature of our society. The GitHub's ticketing mechanism, issues, has the potential to unveil processes of team identity, rundown and solve errors. The properties and characteristics of these tickets could be compared to the really rough and apparently incorrect estimation of troubleshooting by software developers. By these process we will build descriptors in new highly dimensional ways whose patterns would by analyzed by computational social science and complexity science methods. 

#Description of the Data Sets#

GitHub datasets are compound by a set of entities that are related to each other. These entities could be users, projects, tickets, or any other functionality of the web application. 

- Users: Are the basic description of a person in GitHub. It provides personal information, background and activity.

- Files: These are the working units. A file can be made and modified by one or several users. Every time a user changes a file an entry is produced in the file history.

- Projects: These are compound by users and files. Usually are simple repositories where all the files related to the project are kept.

- Organizations: An organization is the entity that creates the projects and manage the teams of users.

<script src="http://www.stathat.com/javascripts/embed.js"></script>
<script>StatHatEmbed.render({s1: 'lxoC', w: 760, h: 235});</script>
<a href="http://www.stathat.com/stats/lxoC">Analyze on StatHat</a>

#Data Analysis Methodology#

In order to measure productivity we must identify the set of variables from the datasets that we will best describe what we understand by this concept. Defining productivity itself is not a trivial issue. One one hand there is the capacity of teams to produce a desired result, called efficacy; and on the other hand there is the capacity of a teams to reach their set of goals using the least amount of resources, which is called efficiency. However, productivity can also be understood as producing the larger amount of contents in the least amount of time.

Once we define what we will understand as productivity, we may then look for a way to characterize teams, their structure and working dynamics. Teams are compound by users, and these have a set of properties which can give additional information about the teams functioning, such as background or skills. We can characterize teams according to their participants and the way they work together. Using social network analysis we can identify a set of properties, combining the mixing patterns and network dynamics, to find relationships between the team structure and the resulting productivity.

#Value Hypothesis#

# Context: Potential Fit of Transactive DB with this Research

Basic context on Michele Catasta and MIT Human Dynamics Lab: Michele Catasta presented to the Human Dynamics resarch team this summer.  His presence at the Media Lab may be a good opportunity to explore potential collaboration.  Following up, Nader took the initiative to have a brainstorming meting with Michele on August 12 about potential collaboration.  The following notes reflect Nader's write up and below that is a draft analysis of the fit using a business, legal and technical lens.  


## Transactive DB Also Focuses on GitHub

The next two paragraphs are Nader's take on the relevance of Transactive DB. 

Michele Catasta from EPFL aims to create a transactive memory search tool w/in the GitHub. This tool can be generated in conjunction with our plan to perform analytics on GitHub API data - specifically issue ticket data. One goal will be to implement a web-based application w/in GitHub that can direct automatically and iteratively direct issue tickets from the person with an information need to the individual who contains that information in memory and can best respond. This tool will rely upon GitHub Network structure data to atuomatically, iteratively, and scalably drive issue tickets to the persons or people best suited to comment on the issue ticket.

Secondly, we could use the transactive approach to our benefit when the data simply is not there and we need to rely upon people's memories. We can use the transactive approach to reconstruct high-level actions on codebases, reconstruct how skills propogated according to collective memory, etc. Here is an example: when code goes through a major refactoring, it is rarely documented why, and what series of choices brought to that decision. Not only we could reconstruct what happened and why, but we might find also useful correlations like "when there is social collaboration, a project undergoes X% more refactorings than one without collaboration", etc. What's more, we could even use the transactive approach to reconstruct how certain skills propogated based on collective memory; this way, in addition to the data we collect on how skills propogate, we could also compile a useful dataset based on collective memory.

The following blurb is from an email shared by Nader (to? from?) Michele regarding transactiveDB

Transactive DB functions as an automated and iterative system that can push queries to the person most appropriate for answering the query. It leverages transaction data to push queries to the asker's most relevant potential answerer. As I see it, this can be very useful as a function within the GitHub API - i.e. a system that pushes issue tickets to the most relevant answering party based on transaction data, AND analytics that our group plans to perform with GitHub and O*Net 

<a href=http://exascale.info/papers/TransactiveDB.pdf>TransactiveDB Paper<a/>

# BLT Initial Analysis of Potential Fit of this Research Project

**Intro**

Overall, I think it's great to reach out to more potential partners and see what if any fit there may be.  The worst that happens is probably just a little wasted time but even in that case we all learn more about other research and researchers which may be a good fit for future projects.  

The process to establish when there is a good fit comes up a lot and I use a "Business, Legal and Technical" analysis to accomplish a quick sweep of the issues/options.  Since Nader was able to get a meeting today on this topic with the researcher and there is apparently a dialog about a potential collaboration, I am using the opportunity to write down the approach.  Eventually I want to reduce these and other factors to a form or wizard tool for use when doing "team formation" in my mass-scale MOOC and Personal Media Platform projects.  For now, here is a quick and dirty example of the method and a rough initial demo of how it surfaces issues or options as seen from business, legal and technical vantage points:  

## Business

**What is the business-level fit of the project purposes and roles of people involved?**

The researcher is, I think, visiting Human Dynamics.  I don't know if this is a very informal and short term visit (ie passing through for a few days and just gave a talk) or a longer term and formal role with our group or something else.  If this researcher is a member of the MIT Human Dynamics Lab then collaboration is easy and virtually all basic questions about the business-level fit are assumed to be in good shape.  The views of Sandy Pentland would be especially important w/r/t how, when and to what end the use of this Transactive DB approach should be explored.  Sandy is aware of the basic current direction and has indicated he likes it (the Skill flow angle is important, he indicated, and he liked other aspects of the basic scope and direction as it currently stands).  Sandy, as PI of our lab, would just need to decide whether or to what extent an internal collaboration was advisable.  

I am not sure what sort of scope or expectations might apply to the work of the Transactive DB project or the researcher.  If the researcher is here for the purpose of doing something then it would need to be established what that something is and how it does or does not fit with this research project.  This research project is intended to be of a narrow scope and rapid timeline - it is agile.  The  purposes and processes best suited to this agile research exploration focused on doing basic analytics using the GitHub API may or may not be a fit.  If the Transactive DB project is really about building code or about attracting users to try the code or about non-related analytics or other purposes then the fit may be too strained.  I am not sure what the researcher is planning to do, if anything, at the Human Dynamics Lab.  Once the purposes and processes expected by the researcher for Transactive DB are understood, then the business-level basic fit can be evaluated more definitely.  

It is unusual but not unwelcome to have a research collaboration brainstormed and discussed based solely on the initiative of an intern and with no prior indication that the meeting has been set up or any communication about the participants, agenda, expectations, etc.  However, this sort of initiative demonstrates good eye to opportunity and involves outreach to a person who is already connected in some way to the Human Dynamics Lab and so on the face of it is well aligned in general. Given the details were not shared in advance, therefore they must be backfilled after the fact.  Nader - please share the contact info for this researcher so I can connect with him.  I will discuss the potential of some form of collaboration with the researcher directly to explore the timing and general fit. 

## Legal

**IP: What IP Applies to this Project and Contributions by this Researcher?**

I don't know what IP applies to the Transactive DB code (if there is code?).  I don't know what IP the other researcher expects will adhere to contributions made to a potential collaboration.  Assuming everything is some form of open source software license and creative commons license for content, then we have a good fit.  Otherwise, the details need to be evaluated. 

**Roles: Who are the parties and what are their relationships?**

I am not sure if this researcher is functionally a member of the Human Dynamics Lab for purposes of this potential collaboration or not.  If they are, then this additional legal complexity is light or zero.  

If the researcher is not acting in a role within or for MIT, then the question is whether the researcher is representing some other entity (another university, company or other organization) and if so, what the role and relationships are between that other organization and the MIT Human Dynamics Lab.  If our institutions have an agreement (eg, maybe he is with a Sponsor of the Media Lab, or there is some other contract or set of agreements that apply based on membership in a mutual consortium or his work at a partner institution, etc) then some understanding of the existing expectations, decision making, ownership, control, approvals, etc would need to be understood and consistent with this research collaboration.  Just saying "we are using open source" is good enough for many situations, such as an informal research exploration between Human Dynamic and NECSI, but may not be sufficient for other organizations that have already made careful arrangements governing the rights, responsibilities, roles and other aspects of the relationship and interactions with MIT.  

If the researcher is just acting for himself in his private capacity as an individual then the issues and complexity are likely no big deal.

**Other?**

Probably not, but there may be other questions about the legal aspect of collaboration.  For instance, if users need to agree to use this DB there may be some questions about whether they are agreeing with MIT and if MIT is hosting the code and the resulting data and of course whether this is Human Subjects research that may require an IRB approval and proper informed consent and other safeguards for the processes and data.  Relevant legal issues beyond IP, if any, would surface upon understanding the basic business context.  If there are some other issues then determination of whether, when or how there is a fit with this transactive db project would also need to take account of whatever those issues are and how/when/by whom they must be resolved or otherwise addressed. 

## Technical

**Readiness:  Is This Project Ready to be Used for This Research?**

I do not yet understand how far along this Transactive DB project is now and where the opportunity is at this point to use the approach.  Given the narrow scope and short timeline of this initial iterative research project it may be a collaboration for a later phase.  Or if it is truly ready and there is a great synergy then perhaps it is a great thing to use now.  

**Relevance: Is the Data Created by Transactive DB Relevant to this Research?**

I am still unclear on exactly what insights or analytics would be yielded from this Transactive DB or who those would relate to this research project.  It almost sounds like the Transactive DB project assumes that users are interacting with the DB while they work and those interactions result in triggering issues and other data.  If that is the case, then the broadscale analytics that span all users of GitHub would be apparently a poor fit until and unless all users of GitHub use Transactive DB.  If there is a large cluster of users who currently use this DB project then perhaps the population is large or otherwise interesting enough to warrant some sort of play in the scope of research being considered now.  

On the other hand, if this Transactive DB approach can easily and quickly be applied retroactively in some way to a population of GitHub users and repositories and activities, etc there may be a more obvious relevance of the project to the data science approach, timing and scope of this research project.  If anybody has more info on this, please share it.  I will also take this up directly with the researcher once I connect with him. 

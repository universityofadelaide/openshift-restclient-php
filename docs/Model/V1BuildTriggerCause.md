# V1BuildTriggerCause

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bitbucketWebHook** | [**\UniversityOfAdelaide\OpenShift\Model\V1BitbucketWebHookCause**](V1BitbucketWebHookCause.md) | BitbucketWebHook represents data for a Bitbucket webhook that fired a specific build. | [optional] 
**genericWebHook** | [**\UniversityOfAdelaide\OpenShift\Model\V1GenericWebHookCause**](V1GenericWebHookCause.md) | genericWebHook holds data about a builds generic webhook trigger. | [optional] 
**githubWebHook** | [**\UniversityOfAdelaide\OpenShift\Model\V1GitHubWebHookCause**](V1GitHubWebHookCause.md) | gitHubWebHook represents data for a GitHub webhook that fired a specific build. | [optional] 
**gitlabWebHook** | [**\UniversityOfAdelaide\OpenShift\Model\V1GitLabWebHookCause**](V1GitLabWebHookCause.md) | GitLabWebHook represents data for a GitLab webhook that fired a specific build. | [optional] 
**imageChangeBuild** | [**\UniversityOfAdelaide\OpenShift\Model\V1ImageChangeCause**](V1ImageChangeCause.md) | imageChangeBuild stores information about an imagechange event that triggered a new build. | [optional] 
**message** | **string** | message is used to store a human readable message for why the build was triggered. E.g.: \&quot;Manually triggered by user\&quot;, \&quot;Configuration change\&quot;,etc. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# V2alpha1CronJobSpec

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**concurrencyPolicy** | **string** | ConcurrencyPolicy specifies how to treat concurrent executions of a Job. | [optional] 
**failedJobsHistoryLimit** | **int** | The number of failed finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified. | [optional] 
**jobTemplate** | [**\UniversityOfAdelaide\OpenShift\Model\V2alpha1JobTemplateSpec**](V2alpha1JobTemplateSpec.md) | JobTemplate is the object that describes the job that will be created when executing a CronJob. | 
**schedule** | **string** | Schedule contains the schedule in Cron format, see https://en.wikipedia.org/wiki/Cron. | 
**startingDeadlineSeconds** | **int** | Optional deadline in seconds for starting the job if it misses scheduled time for any reason.  Missed jobs executions will be counted as failed ones. | [optional] 
**successfulJobsHistoryLimit** | **int** | The number of successful finished jobs to retain. This is a pointer to distinguish between explicit zero and not specified. | [optional] 
**suspend** | **bool** | Suspend flag tells the controller to suspend subsequent executions, it does not apply to already started executions.  Defaults to false. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



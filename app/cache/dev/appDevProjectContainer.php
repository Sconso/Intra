<?php
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InactiveScopeException;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Parameter;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
class appDevProjectContainer extends Container
{
    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();
        $this->services =
        $this->scopedServices =
        $this->scopeStacks = array();
        $this->set('service_container', $this);
        $this->scopes = array('request' => 'container');
        $this->scopeChildren = array('request' => array());
        $this->methodMap = array(
            'annotation_reader' => 'getAnnotationReaderService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService',
            'assetic.cache' => 'getAssetic_CacheService',
            'assetic.controller' => 'getAssetic_ControllerService',
            'assetic.filter.cssrewrite' => 'getAssetic_Filter_CssrewriteService',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assetic.value_supplier.default' => 'getAssetic_ValueSupplier_DefaultService',
            'cache_clearer' => 'getCacheClearerService',
            'cache_warmer' => 'getCacheWarmerService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.emergency_logger_listener' => 'getDebug_EmergencyLoggerListenerService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'file_locator' => 'getFileLocatorService',
            'filesystem' => 'getFilesystemService',
            'form.csrf_provider' => 'getForm_CsrfProviderService',
            'form.factory' => 'getForm_FactoryService',
            'form.registry' => 'getForm_RegistryService',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService',
            'form.type.birthday' => 'getForm_Type_BirthdayService',
            'form.type.button' => 'getForm_Type_ButtonService',
            'form.type.checkbox' => 'getForm_Type_CheckboxService',
            'form.type.choice' => 'getForm_Type_ChoiceService',
            'form.type.collection' => 'getForm_Type_CollectionService',
            'form.type.country' => 'getForm_Type_CountryService',
            'form.type.currency' => 'getForm_Type_CurrencyService',
            'form.type.date' => 'getForm_Type_DateService',
            'form.type.datetime' => 'getForm_Type_DatetimeService',
            'form.type.email' => 'getForm_Type_EmailService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type.file' => 'getForm_Type_FileService',
            'form.type.form' => 'getForm_Type_FormService',
            'form.type.hidden' => 'getForm_Type_HiddenService',
            'form.type.integer' => 'getForm_Type_IntegerService',
            'form.type.language' => 'getForm_Type_LanguageService',
            'form.type.locale' => 'getForm_Type_LocaleService',
            'form.type.money' => 'getForm_Type_MoneyService',
            'form.type.number' => 'getForm_Type_NumberService',
            'form.type.password' => 'getForm_Type_PasswordService',
            'form.type.percent' => 'getForm_Type_PercentService',
            'form.type.radio' => 'getForm_Type_RadioService',
            'form.type.repeated' => 'getForm_Type_RepeatedService',
            'form.type.reset' => 'getForm_Type_ResetService',
            'form.type.search' => 'getForm_Type_SearchService',
            'form.type.submit' => 'getForm_Type_SubmitService',
            'form.type.text' => 'getForm_Type_TextService',
            'form.type.textarea' => 'getForm_Type_TextareaService',
            'form.type.time' => 'getForm_Type_TimeService',
            'form.type.timezone' => 'getForm_Type_TimezoneService',
            'form.type.url' => 'getForm_Type_UrlService',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService',
            'fos_user.change_password.form' => 'getFosUser_ChangePassword_FormService',
            'fos_user.change_password.form.handler.default' => 'getFosUser_ChangePassword_Form_Handler_DefaultService',
            'fos_user.change_password.form.type' => 'getFosUser_ChangePassword_Form_TypeService',
            'fos_user.entity_manager' => 'getFosUser_EntityManagerService',
            'fos_user.group.form' => 'getFosUser_Group_FormService',
            'fos_user.group.form.handler' => 'getFosUser_Group_Form_HandlerService',
            'fos_user.group.form.type' => 'getFosUser_Group_Form_TypeService',
            'fos_user.group_manager' => 'getFosUser_GroupManagerService',
            'fos_user.mailer' => 'getFosUser_MailerService',
            'fos_user.profile.form' => 'getFosUser_Profile_FormService',
            'fos_user.profile.form.handler' => 'getFosUser_Profile_Form_HandlerService',
            'fos_user.profile.form.type' => 'getFosUser_Profile_Form_TypeService',
            'fos_user.registration.form' => 'getFosUser_Registration_FormService',
            'fos_user.registration.form.handler' => 'getFosUser_Registration_Form_HandlerService',
            'fos_user.registration.form.type' => 'getFosUser_Registration_Form_TypeService',
            'fos_user.resetting.form' => 'getFosUser_Resetting_FormService',
            'fos_user.resetting.form.handler' => 'getFosUser_Resetting_Form_HandlerService',
            'fos_user.resetting.form.type' => 'getFosUser_Resetting_Form_TypeService',
            'fos_user.security.interactive_login_listener' => 'getFosUser_Security_InteractiveLoginListenerService',
            'fos_user.security.login_manager' => 'getFosUser_Security_LoginManagerService',
            'fos_user.user_manager' => 'getFosUser_UserManagerService',
            'fos_user.username_form_type' => 'getFosUser_UsernameFormTypeService',
            'fos_user.util.email_canonicalizer' => 'getFosUser_Util_EmailCanonicalizerService',
            'fos_user.util.token_generator' => 'getFosUser_Util_TokenGeneratorService',
            'fos_user.util.user_manipulator' => 'getFosUser_Util_UserManipulatorService',
            'fragment.handler' => 'getFragment_HandlerService',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService',
            'http_kernel' => 'getHttpKernelService',
            'jms_aop.interceptor_loader' => 'getJmsAop_InterceptorLoaderService',
            'jms_aop.pointcut_container' => 'getJmsAop_PointcutContainerService',
            'jms_di_extra.controller_resolver' => 'getJmsDiExtra_ControllerResolverService',
            'jms_di_extra.metadata.converter' => 'getJmsDiExtra_Metadata_ConverterService',
            'jms_di_extra.metadata.metadata_factory' => 'getJmsDiExtra_Metadata_MetadataFactoryService',
            'jms_di_extra.metadata_driver' => 'getJmsDiExtra_MetadataDriverService',
            'kernel' => 'getKernelService',
            'knp_menu.factory' => 'getKnpMenu_FactoryService',
            'knp_menu.menu_provider' => 'getKnpMenu_MenuProviderService',
            'knp_menu.renderer.list' => 'getKnpMenu_Renderer_ListService',
            'knp_menu.renderer.twig' => 'getKnpMenu_Renderer_TwigService',
            'knp_menu.renderer_provider' => 'getKnpMenu_RendererProviderService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.debug' => 'getMonolog_Handler_DebugService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.doctrine' => 'getMonolog_Logger_DoctrineService',
            'monolog.logger.emergency' => 'getMonolog_Logger_EmergencyService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.logger.router' => 'getMonolog_Logger_RouterService',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'request' => 'getRequestService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'routing.loader' => 'getRouting_LoaderService',
            'security.access.decision_manager' => 'getSecurity_Access_DecisionManagerService',
            'security.access.method_interceptor' => 'getSecurity_Access_MethodInterceptorService',
            'security.access.pointcut' => 'getSecurity_Access_PointcutService',
            'security.access_listener' => 'getSecurity_AccessListenerService',
            'security.access_map' => 'getSecurity_AccessMapService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.session_strategy' => 'getSecurity_Authentication_SessionStrategyService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.channel_listener' => 'getSecurity_ChannelListenerService',
            'security.context' => 'getSecurity_ContextService',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService',
            'security.expressions.compiler' => 'getSecurity_Expressions_CompilerService',
            'security.expressions.handler' => 'getSecurity_Expressions_HandlerService',
            'security.expressions.reverse_interpreter' => 'getSecurity_Expressions_ReverseInterpreterService',
            'security.extra.metadata_driver' => 'getSecurity_Extra_MetadataDriverService',
            'security.extra.metadata_factory' => 'getSecurity_Extra_MetadataFactoryService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map.context.admin' => 'getSecurity_Firewall_Map_Context_AdminService',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService',
            'security.http_utils' => 'getSecurity_HttpUtilsService',
            'security.logout.handler.session' => 'getSecurity_Logout_Handler_SessionService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.secure_random' => 'getSecurity_SecureRandomService',
            'security.user_checker' => 'getSecurity_UserCheckerService',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService',
            'sensio_distribution.webconfigurator' => 'getSensioDistribution_WebconfiguratorService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.datetime' => 'getSensioFrameworkExtra_Converter_DatetimeService',
            'sensio_framework_extra.converter.doctrine.orm' => 'getSensioFrameworkExtra_Converter_Doctrine_OrmService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.view.guesser' => 'getSensioFrameworkExtra_View_GuesserService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'service_container' => 'getServiceContainerService',
            'session' => 'getSessionService',
            'session.handler' => 'getSession_HandlerService',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService',
            'session.storage.native' => 'getSession_Storage_NativeService',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService',
            'session_listener' => 'getSessionListenerService',
            'sonata.admin.audit.manager' => 'getSonata_Admin_Audit_ManagerService',
            'sonata.admin.audit.orm.reader' => 'getSonata_Admin_Audit_Orm_ReaderService',
            'sonata.admin.block.admin_list' => 'getSonata_Admin_Block_AdminListService',
            'sonata.admin.block.search_result' => 'getSonata_Admin_Block_SearchResultService',
            'sonata.admin.builder.filter.factory' => 'getSonata_Admin_Builder_Filter_FactoryService',
            'sonata.admin.builder.orm_datagrid' => 'getSonata_Admin_Builder_OrmDatagridService',
            'sonata.admin.builder.orm_form' => 'getSonata_Admin_Builder_OrmFormService',
            'sonata.admin.builder.orm_list' => 'getSonata_Admin_Builder_OrmListService',
            'sonata.admin.builder.orm_show' => 'getSonata_Admin_Builder_OrmShowService',
            'sonata.admin.controller.admin' => 'getSonata_Admin_Controller_AdminService',
            'sonata.admin.event.extension' => 'getSonata_Admin_Event_ExtensionService',
            'sonata.admin.exporter' => 'getSonata_Admin_ExporterService',
            'sonata.admin.form.extension.field' => 'getSonata_Admin_Form_Extension_FieldService',
            'sonata.admin.form.filter.type.choice' => 'getSonata_Admin_Form_Filter_Type_ChoiceService',
            'sonata.admin.form.filter.type.date' => 'getSonata_Admin_Form_Filter_Type_DateService',
            'sonata.admin.form.filter.type.daterange' => 'getSonata_Admin_Form_Filter_Type_DaterangeService',
            'sonata.admin.form.filter.type.datetime' => 'getSonata_Admin_Form_Filter_Type_DatetimeService',
            'sonata.admin.form.filter.type.datetime_range' => 'getSonata_Admin_Form_Filter_Type_DatetimeRangeService',
            'sonata.admin.form.filter.type.default' => 'getSonata_Admin_Form_Filter_Type_DefaultService',
            'sonata.admin.form.filter.type.number' => 'getSonata_Admin_Form_Filter_Type_NumberService',
            'sonata.admin.form.type.admin' => 'getSonata_Admin_Form_Type_AdminService',
            'sonata.admin.form.type.array' => 'getSonata_Admin_Form_Type_ArrayService',
            'sonata.admin.form.type.boolean' => 'getSonata_Admin_Form_Type_BooleanService',
            'sonata.admin.form.type.collection' => 'getSonata_Admin_Form_Type_CollectionService',
            'sonata.admin.form.type.date_range' => 'getSonata_Admin_Form_Type_DateRangeService',
            'sonata.admin.form.type.datetime_range' => 'getSonata_Admin_Form_Type_DatetimeRangeService',
            'sonata.admin.form.type.equal' => 'getSonata_Admin_Form_Type_EqualService',
            'sonata.admin.form.type.model_choice' => 'getSonata_Admin_Form_Type_ModelChoiceService',
            'sonata.admin.form.type.model_list' => 'getSonata_Admin_Form_Type_ModelListService',
            'sonata.admin.form.type.model_reference' => 'getSonata_Admin_Form_Type_ModelReferenceService',
            'sonata.admin.form.type.translatable_choice' => 'getSonata_Admin_Form_Type_TranslatableChoiceService',
            'sonata.admin.guesser.orm_datagrid' => 'getSonata_Admin_Guesser_OrmDatagridService',
            'sonata.admin.guesser.orm_datagrid_chain' => 'getSonata_Admin_Guesser_OrmDatagridChainService',
            'sonata.admin.guesser.orm_list' => 'getSonata_Admin_Guesser_OrmListService',
            'sonata.admin.guesser.orm_list_chain' => 'getSonata_Admin_Guesser_OrmListChainService',
            'sonata.admin.guesser.orm_show' => 'getSonata_Admin_Guesser_OrmShowService',
            'sonata.admin.guesser.orm_show_chain' => 'getSonata_Admin_Guesser_OrmShowChainService',
            'sonata.admin.helper' => 'getSonata_Admin_HelperService',
            'sonata.admin.label.strategy.bc' => 'getSonata_Admin_Label_Strategy_BcService',
            'sonata.admin.label.strategy.form_component' => 'getSonata_Admin_Label_Strategy_FormComponentService',
            'sonata.admin.label.strategy.native' => 'getSonata_Admin_Label_Strategy_NativeService',
            'sonata.admin.label.strategy.noop' => 'getSonata_Admin_Label_Strategy_NoopService',
            'sonata.admin.label.strategy.underscore' => 'getSonata_Admin_Label_Strategy_UnderscoreService',
            'sonata.admin.manager.orm' => 'getSonata_Admin_Manager_OrmService',
            'sonata.admin.manipulator.acl.admin' => 'getSonata_Admin_Manipulator_Acl_AdminService',
            'sonata.admin.manipulator.acl.object.orm' => 'getSonata_Admin_Manipulator_Acl_Object_OrmService',
            'sonata.admin.object.manipulator.acl.admin' => 'getSonata_Admin_Object_Manipulator_Acl_AdminService',
            'sonata.admin.orm.filter.type.boolean' => 'getSonata_Admin_Orm_Filter_Type_BooleanService',
            'sonata.admin.orm.filter.type.callback' => 'getSonata_Admin_Orm_Filter_Type_CallbackService',
            'sonata.admin.orm.filter.type.choice' => 'getSonata_Admin_Orm_Filter_Type_ChoiceService',
            'sonata.admin.orm.filter.type.class' => 'getSonata_Admin_Orm_Filter_Type_ClassService',
            'sonata.admin.orm.filter.type.date' => 'getSonata_Admin_Orm_Filter_Type_DateService',
            'sonata.admin.orm.filter.type.date_range' => 'getSonata_Admin_Orm_Filter_Type_DateRangeService',
            'sonata.admin.orm.filter.type.datetime' => 'getSonata_Admin_Orm_Filter_Type_DatetimeService',
            'sonata.admin.orm.filter.type.datetime_range' => 'getSonata_Admin_Orm_Filter_Type_DatetimeRangeService',
            'sonata.admin.orm.filter.type.model' => 'getSonata_Admin_Orm_Filter_Type_ModelService',
            'sonata.admin.orm.filter.type.number' => 'getSonata_Admin_Orm_Filter_Type_NumberService',
            'sonata.admin.orm.filter.type.string' => 'getSonata_Admin_Orm_Filter_Type_StringService',
            'sonata.admin.orm.filter.type.time' => 'getSonata_Admin_Orm_Filter_Type_TimeService',
            'sonata.admin.pool' => 'getSonata_Admin_PoolService',
            'sonata.admin.route.default_generator' => 'getSonata_Admin_Route_DefaultGeneratorService',
            'sonata.admin.route.path_info' => 'getSonata_Admin_Route_PathInfoService',
            'sonata.admin.route.query_string' => 'getSonata_Admin_Route_QueryStringService',
            'sonata.admin.route_loader' => 'getSonata_Admin_RouteLoaderService',
            'sonata.admin.search.handler' => 'getSonata_Admin_Search_HandlerService',
            'sonata.admin.security.handler' => 'getSonata_Admin_Security_HandlerService',
            'sonata.admin.twig.extension' => 'getSonata_Admin_Twig_ExtensionService',
            'sonata.admin.twig.extension.text' => 'getSonata_Admin_Twig_Extension_TextService',
            'sonata.admin.validator.inline' => 'getSonata_Admin_Validator_InlineService',
            'sonata.admin_doctrine_orm.block.audit' => 'getSonata_AdminDoctrineOrm_Block_AuditService',
            'sonata.block.cache.handler.default' => 'getSonata_Block_Cache_Handler_DefaultService',
            'sonata.block.cache.handler.noop' => 'getSonata_Block_Cache_Handler_NoopService',
            'sonata.block.context_manager.default' => 'getSonata_Block_ContextManager_DefaultService',
            'sonata.block.exception.filter.debug_only' => 'getSonata_Block_Exception_Filter_DebugOnlyService',
            'sonata.block.exception.filter.ignore_block_exception' => 'getSonata_Block_Exception_Filter_IgnoreBlockExceptionService',
            'sonata.block.exception.filter.keep_all' => 'getSonata_Block_Exception_Filter_KeepAllService',
            'sonata.block.exception.filter.keep_none' => 'getSonata_Block_Exception_Filter_KeepNoneService',
            'sonata.block.exception.renderer.inline' => 'getSonata_Block_Exception_Renderer_InlineService',
            'sonata.block.exception.renderer.inline_debug' => 'getSonata_Block_Exception_Renderer_InlineDebugService',
            'sonata.block.exception.renderer.throw' => 'getSonata_Block_Exception_Renderer_ThrowService',
            'sonata.block.exception.strategy.manager' => 'getSonata_Block_Exception_Strategy_ManagerService',
            'sonata.block.form.type.block' => 'getSonata_Block_Form_Type_BlockService',
            'sonata.block.loader.chain' => 'getSonata_Block_Loader_ChainService',
            'sonata.block.loader.service' => 'getSonata_Block_Loader_ServiceService',
            'sonata.block.manager' => 'getSonata_Block_ManagerService',
            'sonata.block.renderer.default' => 'getSonata_Block_Renderer_DefaultService',
            'sonata.block.service.empty' => 'getSonata_Block_Service_EmptyService',
            'sonata.block.service.rss' => 'getSonata_Block_Service_RssService',
            'sonata.block.service.text' => 'getSonata_Block_Service_TextService',
            'sonata.block.templating.helper' => 'getSonata_Block_Templating_HelperService',
            'sonata.block.twig.global' => 'getSonata_Block_Twig_GlobalService',
            'sonata.cache.invalidation.simple' => 'getSonata_Cache_Invalidation_SimpleService',
            'sonata.cache.manager' => 'getSonata_Cache_ManagerService',
            'sonata.cache.model_identifier' => 'getSonata_Cache_ModelIdentifierService',
            'sonata.cache.noop' => 'getSonata_Cache_NoopService',
            'sonata.cache.orm.event_subscriber' => 'getSonata_Cache_Orm_EventSubscriberService',
            'sonata.cache.orm.event_subscriber.default' => 'getSonata_Cache_Orm_EventSubscriber_DefaultService',
            'sonata.cache.recorder' => 'getSonata_Cache_RecorderService',
            'sonata.easy_extends.doctrine.mapper' => 'getSonata_EasyExtends_Doctrine_MapperService',
            'sonata.easy_extends.generator.bundle' => 'getSonata_EasyExtends_Generator_BundleService',
            'sonata.easy_extends.generator.odm' => 'getSonata_EasyExtends_Generator_OdmService',
            'sonata.easy_extends.generator.orm' => 'getSonata_EasyExtends_Generator_OrmService',
            'sonata.easy_extends.generator.phpcr' => 'getSonata_EasyExtends_Generator_PhpcrService',
            'sonata.user.admin.group' => 'getSonata_User_Admin_GroupService',
            'sonata.user.admin.user' => 'getSonata_User_Admin_UserService',
            'sonata.user.block.account' => 'getSonata_User_Block_AccountService',
            'sonata.user.block.menu' => 'getSonata_User_Block_MenuService',
            'sonata.user.editable_role_builder' => 'getSonata_User_EditableRoleBuilderService',
            'sonata.user.form.gender_list' => 'getSonata_User_Form_GenderListService',
            'sonata.user.form.type.security_roles' => 'getSonata_User_Form_Type_SecurityRolesService',
            'sonata.user.google.authenticator' => 'getSonata_User_Google_AuthenticatorService',
            'sonata.user.google.authenticator.interactive_login_listener' => 'getSonata_User_Google_Authenticator_InteractiveLoginListenerService',
            'sonata.user.google.authenticator.provider' => 'getSonata_User_Google_Authenticator_ProviderService',
            'sonata.user.google.authenticator.request_listener' => 'getSonata_User_Google_Authenticator_RequestListenerService',
            'sonata.user.profile.form' => 'getSonata_User_Profile_FormService',
            'sonata.user.profile.form.handler' => 'getSonata_User_Profile_Form_HandlerService',
            'sonata.user.profile.form.type' => 'getSonata_User_Profile_Form_TypeService',
            'sonata.user.profile.menu_builder' => 'getSonata_User_Profile_MenuBuilderService',
            'sonata.user.twig.global' => 'getSonata_User_Twig_GlobalService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService',
            'swiftmailer.mailer.default.spool' => 'getSwiftmailer_Mailer_Default_SpoolService',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService',
            'swiftmailer.mailer.default.transport.eventdispatcher' => 'getSwiftmailer_Mailer_Default_Transport_EventdispatcherService',
            'swiftmailer.mailer.default.transport.real' => 'getSwiftmailer_Mailer_Default_Transport_RealService',
            'templating' => 'getTemplatingService',
            'templating.asset.package_factory' => 'getTemplating_Asset_PackageFactoryService',
            'templating.filename_parser' => 'getTemplating_FilenameParserService',
            'templating.globals' => 'getTemplating_GlobalsService',
            'templating.helper.actions' => 'getTemplating_Helper_ActionsService',
            'templating.helper.assets' => 'getTemplating_Helper_AssetsService',
            'templating.helper.code' => 'getTemplating_Helper_CodeService',
            'templating.helper.form' => 'getTemplating_Helper_FormService',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService',
            'templating.helper.request' => 'getTemplating_Helper_RequestService',
            'templating.helper.router' => 'getTemplating_Helper_RouterService',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService',
            'templating.helper.session' => 'getTemplating_Helper_SessionService',
            'templating.helper.slots' => 'getTemplating_Helper_SlotsService',
            'templating.helper.translator' => 'getTemplating_Helper_TranslatorService',
            'templating.loader' => 'getTemplating_LoaderService',
            'templating.locator' => 'getTemplating_LocatorService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService',
            'translation.extractor' => 'getTranslation_ExtractorService',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService',
            'translation.loader' => 'getTranslation_LoaderService',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService',
            'translation.loader.dat' => 'getTranslation_Loader_DatService',
            'translation.loader.ini' => 'getTranslation_Loader_IniService',
            'translation.loader.mo' => 'getTranslation_Loader_MoService',
            'translation.loader.php' => 'getTranslation_Loader_PhpService',
            'translation.loader.po' => 'getTranslation_Loader_PoService',
            'translation.loader.qt' => 'getTranslation_Loader_QtService',
            'translation.loader.res' => 'getTranslation_Loader_ResService',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService',
            'translation.writer' => 'getTranslation_WriterService',
            'translator.default' => 'getTranslator_DefaultService',
            'twig' => 'getTwigService',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService',
            'uri_signer' => 'getUriSignerService',
            'validator' => 'getValidatorService',
            'validator.mapping.class_metadata_factory' => 'getValidator_Mapping_ClassMetadataFactoryService',
            'validator.validator_factory' => 'getValidator_ValidatorFactoryService',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->aliases = array(
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'fos_user.change_password.form.handler' => 'fos_user.change_password.form.handler.default',
            'fos_user.util.username_canonicalizer' => 'fos_user.util.email_canonicalizer',
            'mailer' => 'swiftmailer.mailer.default',
            'sensio.distribution.webconfigurator' => 'sensio_distribution.webconfigurator',
            'session.storage' => 'session.storage.native',
            'sonata.block.cache.handler' => 'sonata.block.cache.handler.default',
            'sonata.block.context_manager' => 'sonata.block.context_manager.default',
            'sonata.block.renderer' => 'sonata.block.renderer.default',
            'sonata.user.authentication.form' => 'fos_user.profile.form',
            'sonata.user.authentication.form_handler' => 'fos_user.profile.form.handler',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
            'translator' => 'translator.default',
        );
    }
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\FileCacheReader(new \Doctrine\Common\Annotations\AnnotationReader(), '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/annotations', false);
    }
    protected function getAssetic_AssetManagerService()
    {
        $this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager($this->get('assetic.asset_factory'), array('twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader($this->get('twig')), new \Assetic\Cache\ConfigCache('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/assetic/config'), false)));
        $instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($this->get('templating.loader'), '', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/Resources/views', '/\\.[^.]+\\.twig$/'), 'twig');
        return $instance;
    }
    protected function getAssetic_ControllerService()
    {
        $instance = new \Symfony\Bundle\AsseticBundle\Controller\AsseticController($this->get('request'), $this->get('assetic.asset_manager'), $this->get('assetic.cache'), false, $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        if ($this->has('assetic.value_supplier.default')) {
            $instance->setValueSupplier($this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        return $instance;
    }
    protected function getAssetic_Filter_CssrewriteService()
    {
        return $this->services['assetic.filter.cssrewrite'] = new \Assetic\Filter\CssRewriteFilter();
    }
    protected function getAssetic_FilterManagerService()
    {
        return $this->services['assetic.filter_manager'] = new \Symfony\Bundle\AsseticBundle\FilterManager($this, array('cssrewrite' => 'assetic.filter.cssrewrite'));
    }
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }
    protected function getCacheClearerService()
    {
        return $this->services['cache_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer(array());
    }
    protected function getCacheWarmerService()
    {
        $a = $this->get('kernel');
        $b = $this->get('templating.filename_parser');
        $c = new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplateFinder($a, $b, '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/Resources');
        return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(array(0 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\TemplatePathsCacheWarmer($c, $this->get('templating.locator')), 1 => new \Symfony\Bundle\AsseticBundle\CacheWarmer\AssetManagerCacheWarmer($this), 2 => new \Symfony\Bundle\FrameworkBundle\CacheWarmer\RouterCacheWarmer($this->get('router')), 3 => new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheCacheWarmer($this, $c), 4 => new \Symfony\Bridge\Doctrine\CacheWarmer\ProxyCacheWarmer($this->get('doctrine')), 5 => new \JMS\DiExtraBundle\HttpKernel\ControllerInjectorsWarmer($a, $this->get('jms_di_extra.controller_resolver'), array())));
    }
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector();
    }
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }
    protected function getDebug_EmergencyLoggerListenerService()
    {
        return $this->services['debug.emergency_logger_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorsLoggerListener('emergency', $this->get('monolog.logger.emergency', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, array('default' => 'doctrine.dbal.default_connection'), array('default' => 'doctrine.orm.default_entity_manager'), 'default', 'default');
    }
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory(array('json' => array('class' => 'Sonata\\Doctrine\\Types\\JsonType', 'commented' => true)));
    }
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this);
        $a->addEventSubscriber($this->get('sonata.cache.orm.event_subscriber'));
        $a->addEventSubscriber(new \FOS\UserBundle\Entity\UserListener($this));
        $a->addEventSubscriber($this->get('sonata.easy_extends.doctrine.mapper'));
        return $this->services['doctrine.dbal.default_connection'] = $this->get('doctrine.dbal.connection_factory')->createConnection(array('dbname' => 'sc_symfony', 'host' => '127.0.0.1', 'port' => NULL, 'user' => 'Demo', 'password' => 'demo', 'charset' => 'UTF8', 'driver' => 'pdo_mysql', 'driverOptions' => array()), new \Doctrine\DBAL\Configuration(), $a, array());
    }
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        require_once '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_diextra/doctrine/EntityManager_5363efc66375b.php';
        $a = new \Doctrine\Common\Cache\ArrayCache();
        $a->setNamespace('sf2orm_default_e0de9c412332f9e2b803fcb0711d47fc');
        $b = new \Doctrine\Common\Cache\ArrayCache();
        $b->setNamespace('sf2orm_default_e0de9c412332f9e2b803fcb0711d47fc');
        $c = new \Doctrine\Common\Cache\ArrayCache();
        $c->setNamespace('sf2orm_default_e0de9c412332f9e2b803fcb0711d47fc');
        $d = new \Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver(array('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/doctrine' => 'FOS\\UserBundle\\Entity', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/config/doctrine' => 'Sonata\\UserBundle\\Entity', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/src/Application/Sonata/UserBundle/Resources/config/doctrine' => 'Application\\Sonata\\UserBundle\\Entity'));
        $d->setGlobalBasename('mapping');
        $e = new \Doctrine\ORM\Mapping\Driver\DriverChain();
        $e->addDriver($d, 'FOS\\UserBundle\\Entity');
        $e->addDriver($d, 'Sonata\\UserBundle\\Entity');
        $e->addDriver($d, 'Application\\Sonata\\UserBundle\\Entity');
        $f = new \Doctrine\ORM\Configuration();
        $f->setEntityNamespaces(array('FOSUserBundle' => 'FOS\\UserBundle\\Entity', 'SonataUserBundle' => 'Sonata\\UserBundle\\Entity', 'ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\Entity'));
        $f->setMetadataCacheImpl($a);
        $f->setQueryCacheImpl($b);
        $f->setResultCacheImpl($c);
        $f->setMetadataDriverImpl($e);
        $f->setProxyDir('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/doctrine/orm/Proxies');
        $f->setProxyNamespace('Proxies');
        $f->setAutoGenerateProxyClasses(false);
        $f->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $f->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $f->setNamingStrategy(new \Doctrine\ORM\Mapping\DefaultNamingStrategy());
        $g = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->get('doctrine.dbal.default_connection'), $f);
        $this->get('doctrine.orm.default_manager_configurator')->configure($g);
        return $this->services['doctrine.orm.default_entity_manager'] = new \EntityManager5363efc66375b_546a8d27f194334ee012bfe64f629947b07e4919\__CG__\Doctrine\ORM\EntityManager($g, $this);
    }
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator(array(), array());
    }
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator($this->get('doctrine'));
    }
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer($this->get('doctrine'));
    }
    protected function getEventDispatcherService()
    {
        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this);
        $instance->addListenerService('kernel.controller', array(0 => 'data_collector.router', 1 => 'onKernelController'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'monolog.handler.firephp', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'assetic.request_listener', 1 => 'onKernelRequest'), 0);
        $instance->addListenerService('kernel.response', array(0 => 'sonata.block.cache.handler.default', 1 => 'onKernelResponse'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'fos_user.security.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('security.interactive_login', array(0 => 'sonata.user.google.authenticator.interactive_login_listener', 1 => 'onSecurityInteractiveLogin'), 0);
        $instance->addListenerService('kernel.request', array(0 => 'sonata.user.google.authenticator.request_listener', 1 => 'onCoreRequest'), -1);
        $instance->addSubscriberService('response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener');
        $instance->addSubscriberService('streamed_response_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener');
        $instance->addSubscriberService('locale_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener');
        $instance->addSubscriberService('debug.emergency_logger_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener');
        $instance->addSubscriberService('session_listener', 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener');
        $instance->addSubscriberService('profiler_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener');
        $instance->addSubscriberService('data_collector.request', 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector');
        $instance->addSubscriberService('router_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener');
        $instance->addSubscriberService('security.firewall', 'Symfony\\Component\\Security\\Http\\Firewall');
        $instance->addSubscriberService('security.rememberme.response_listener', 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener');
        $instance->addSubscriberService('twig.exception_listener', 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener');
        $instance->addSubscriberService('swiftmailer.email_sender.listener', 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener');
        $instance->addSubscriberService('sensio_framework_extra.controller.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener');
        $instance->addSubscriberService('sensio_framework_extra.converter.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener');
        $instance->addSubscriberService('sensio_framework_extra.view.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener');
        $instance->addSubscriberService('sensio_framework_extra.cache.listener', 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\CacheListener');
        $instance->addSubscriberService('web_profiler.debug_toolbar', 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener');
        return $instance;
    }
    protected function getFileLocatorService()
    {
        return $this->services['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator($this->get('kernel'), '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/Resources');
    }
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
    protected function getForm_CsrfProviderService()
    {
        return $this->services['form.csrf_provider'] = new \Symfony\Component\Form\Extension\Csrf\CsrfProvider\SessionCsrfProvider($this->get('session'), '123j123l1k2j3l12k3j12lk3 l');
    }
    protected function getForm_FactoryService()
    {
        return $this->services['form.factory'] = new \Symfony\Component\Form\FormFactory($this->get('form.registry'), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_RegistryService()
    {
        return $this->services['form.registry'] = new \Symfony\Component\Form\FormRegistry(array(0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension($this, array('form' => 'form.type.form', 'birthday' => 'form.type.birthday', 'checkbox' => 'form.type.checkbox', 'choice' => 'form.type.choice', 'collection' => 'form.type.collection', 'country' => 'form.type.country', 'date' => 'form.type.date', 'datetime' => 'form.type.datetime', 'email' => 'form.type.email', 'file' => 'form.type.file', 'hidden' => 'form.type.hidden', 'integer' => 'form.type.integer', 'language' => 'form.type.language', 'locale' => 'form.type.locale', 'money' => 'form.type.money', 'number' => 'form.type.number', 'password' => 'form.type.password', 'percent' => 'form.type.percent', 'radio' => 'form.type.radio', 'repeated' => 'form.type.repeated', 'search' => 'form.type.search', 'textarea' => 'form.type.textarea', 'text' => 'form.type.text', 'time' => 'form.type.time', 'timezone' => 'form.type.timezone', 'url' => 'form.type.url', 'button' => 'form.type.button', 'submit' => 'form.type.submit', 'reset' => 'form.type.reset', 'currency' => 'form.type.currency', 'entity' => 'form.type.entity', 'sonata_block_service_choice' => 'sonata.block.form.type.block', 'sonata_type_admin' => 'sonata.admin.form.type.admin', 'sonata_type_collection' => 'sonata.admin.form.type.collection', 'sonata_type_model' => 'sonata.admin.form.type.model_choice', 'sonata_type_model_list' => 'sonata.admin.form.type.model_list', 'sonata_type_model_reference' => 'sonata.admin.form.type.model_reference', 'sonata_type_immutable_array' => 'sonata.admin.form.type.array', 'sonata_type_boolean' => 'sonata.admin.form.type.boolean', 'sonata_type_translatable_choice' => 'sonata.admin.form.type.translatable_choice', 'sonata_type_date_range' => 'sonata.admin.form.type.date_range', 'sonata_type_datetime_range' => 'sonata.admin.form.type.datetime_range', 'sonata_type_equal' => 'sonata.admin.form.type.equal', 'sonata_type_filter_number' => 'sonata.admin.form.filter.type.number', 'sonata_type_filter_choice' => 'sonata.admin.form.filter.type.choice', 'sonata_type_filter_default' => 'sonata.admin.form.filter.type.default', 'sonata_type_filter_date' => 'sonata.admin.form.filter.type.date', 'sonata_type_filter_date_range' => 'sonata.admin.form.filter.type.daterange', 'sonata_type_filter_datetime' => 'sonata.admin.form.filter.type.datetime', 'sonata_type_filter_datetime_range' => 'sonata.admin.form.filter.type.datetime_range', 'fos_user_username' => 'fos_user.username_form_type', 'fos_user_profile' => 'fos_user.profile.form.type', 'fos_user_registration' => 'fos_user.registration.form.type', 'fos_user_change_password' => 'fos_user.change_password.form.type', 'fos_user_resetting' => 'fos_user.resetting.form.type', 'fos_user_group' => 'fos_user.group.form.type', 'sonata_security_roles' => 'sonata.user.form.type.security_roles', 'sonata_user_profile' => 'sonata.user.profile.form.type', 'sonata_user_gender' => 'sonata.user.form.gender_list'), array('form' => array(0 => 'form.type_extension.form.http_foundation', 1 => 'form.type_extension.form.validator', 2 => 'form.type_extension.csrf', 3 => 'sonata.admin.form.extension.field'), 'repeated' => array(0 => 'form.type_extension.repeated.validator'), 'submit' => array(0 => 'form.type_extension.submit.validator')), array(0 => 'form.type_guesser.validator', 1 => 'form.type_guesser.doctrine'))), $this->get('form.resolved_type_factory'));
    }
    protected function getForm_ResolvedTypeFactoryService()
    {
        return $this->services['form.resolved_type_factory'] = new \Symfony\Component\Form\ResolvedFormTypeFactory();
    }
    protected function getForm_Type_BirthdayService()
    {
        return $this->services['form.type.birthday'] = new \Symfony\Component\Form\Extension\Core\Type\BirthdayType();
    }
    protected function getForm_Type_ButtonService()
    {
        return $this->services['form.type.button'] = new \Symfony\Component\Form\Extension\Core\Type\ButtonType();
    }
    protected function getForm_Type_CheckboxService()
    {
        return $this->services['form.type.checkbox'] = new \Symfony\Component\Form\Extension\Core\Type\CheckboxType();
    }
    protected function getForm_Type_ChoiceService()
    {
        return $this->services['form.type.choice'] = new \Symfony\Component\Form\Extension\Core\Type\ChoiceType();
    }
    protected function getForm_Type_CollectionService()
    {
        return $this->services['form.type.collection'] = new \Symfony\Component\Form\Extension\Core\Type\CollectionType();
    }
    protected function getForm_Type_CountryService()
    {
        return $this->services['form.type.country'] = new \Symfony\Component\Form\Extension\Core\Type\CountryType();
    }
    protected function getForm_Type_CurrencyService()
    {
        return $this->services['form.type.currency'] = new \Symfony\Component\Form\Extension\Core\Type\CurrencyType();
    }
    protected function getForm_Type_DateService()
    {
        return $this->services['form.type.date'] = new \Symfony\Component\Form\Extension\Core\Type\DateType();
    }
    protected function getForm_Type_DatetimeService()
    {
        return $this->services['form.type.datetime'] = new \Symfony\Component\Form\Extension\Core\Type\DateTimeType();
    }
    protected function getForm_Type_EmailService()
    {
        return $this->services['form.type.email'] = new \Symfony\Component\Form\Extension\Core\Type\EmailType();
    }
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType($this->get('doctrine'));
    }
    protected function getForm_Type_FileService()
    {
        return $this->services['form.type.file'] = new \Symfony\Component\Form\Extension\Core\Type\FileType();
    }
    protected function getForm_Type_FormService()
    {
        return $this->services['form.type.form'] = new \Symfony\Component\Form\Extension\Core\Type\FormType($this->get('property_accessor'));
    }
    protected function getForm_Type_HiddenService()
    {
        return $this->services['form.type.hidden'] = new \Symfony\Component\Form\Extension\Core\Type\HiddenType();
    }
    protected function getForm_Type_IntegerService()
    {
        return $this->services['form.type.integer'] = new \Symfony\Component\Form\Extension\Core\Type\IntegerType();
    }
    protected function getForm_Type_LanguageService()
    {
        return $this->services['form.type.language'] = new \Symfony\Component\Form\Extension\Core\Type\LanguageType();
    }
    protected function getForm_Type_LocaleService()
    {
        return $this->services['form.type.locale'] = new \Symfony\Component\Form\Extension\Core\Type\LocaleType();
    }
    protected function getForm_Type_MoneyService()
    {
        return $this->services['form.type.money'] = new \Symfony\Component\Form\Extension\Core\Type\MoneyType();
    }
    protected function getForm_Type_NumberService()
    {
        return $this->services['form.type.number'] = new \Symfony\Component\Form\Extension\Core\Type\NumberType();
    }
    protected function getForm_Type_PasswordService()
    {
        return $this->services['form.type.password'] = new \Symfony\Component\Form\Extension\Core\Type\PasswordType();
    }
    protected function getForm_Type_PercentService()
    {
        return $this->services['form.type.percent'] = new \Symfony\Component\Form\Extension\Core\Type\PercentType();
    }
    protected function getForm_Type_RadioService()
    {
        return $this->services['form.type.radio'] = new \Symfony\Component\Form\Extension\Core\Type\RadioType();
    }
    protected function getForm_Type_RepeatedService()
    {
        return $this->services['form.type.repeated'] = new \Symfony\Component\Form\Extension\Core\Type\RepeatedType();
    }
    protected function getForm_Type_ResetService()
    {
        return $this->services['form.type.reset'] = new \Symfony\Component\Form\Extension\Core\Type\ResetType();
    }
    protected function getForm_Type_SearchService()
    {
        return $this->services['form.type.search'] = new \Symfony\Component\Form\Extension\Core\Type\SearchType();
    }
    protected function getForm_Type_SubmitService()
    {
        return $this->services['form.type.submit'] = new \Symfony\Component\Form\Extension\Core\Type\SubmitType();
    }
    protected function getForm_Type_TextService()
    {
        return $this->services['form.type.text'] = new \Symfony\Component\Form\Extension\Core\Type\TextType();
    }
    protected function getForm_Type_TextareaService()
    {
        return $this->services['form.type.textarea'] = new \Symfony\Component\Form\Extension\Core\Type\TextareaType();
    }
    protected function getForm_Type_TimeService()
    {
        return $this->services['form.type.time'] = new \Symfony\Component\Form\Extension\Core\Type\TimeType();
    }
    protected function getForm_Type_TimezoneService()
    {
        return $this->services['form.type.timezone'] = new \Symfony\Component\Form\Extension\Core\Type\TimezoneType();
    }
    protected function getForm_Type_UrlService()
    {
        return $this->services['form.type.url'] = new \Symfony\Component\Form\Extension\Core\Type\UrlType();
    }
    protected function getForm_TypeExtension_CsrfService()
    {
        return $this->services['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension($this->get('form.csrf_provider'), true, '_token', $this->get('translator.default'), 'validators');
    }
    protected function getForm_TypeExtension_Form_HttpFoundationService()
    {
        return $this->services['form.type_extension.form.http_foundation'] = new \Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension();
    }
    protected function getForm_TypeExtension_Form_ValidatorService()
    {
        return $this->services['form.type_extension.form.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension($this->get('validator'));
    }
    protected function getForm_TypeExtension_Repeated_ValidatorService()
    {
        return $this->services['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension();
    }
    protected function getForm_TypeExtension_Submit_ValidatorService()
    {
        return $this->services['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension();
    }
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser($this->get('doctrine'));
    }
    protected function getForm_TypeGuesser_ValidatorService()
    {
        return $this->services['form.type_guesser.validator'] = new \Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser($this->get('validator.mapping.class_metadata_factory'));
    }
    protected function getFosUser_ChangePassword_FormService()
    {
        return $this->services['fos_user.change_password.form'] = $this->get('form.factory')->createNamed('fos_user_change_password_form', 'fos_user_change_password', NULL, array('validation_groups' => array(0 => 'ChangePassword', 1 => 'Default')));
    }
    protected function getFosUser_ChangePassword_Form_Handler_DefaultService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.change_password.form.handler.default', 'request');
        }
        return $this->services['fos_user.change_password.form.handler.default'] = $this->scopedServices['request']['fos_user.change_password.form.handler.default'] = new \FOS\UserBundle\Form\Handler\ChangePasswordFormHandler($this->get('fos_user.change_password.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_ChangePassword_Form_TypeService()
    {
        return $this->services['fos_user.change_password.form.type'] = new \FOS\UserBundle\Form\Type\ChangePasswordFormType();
    }
    protected function getFosUser_Group_FormService()
    {
        return $this->services['fos_user.group.form'] = $this->get('form.factory')->createNamed('fos_user_group_form', 'fos_user_group', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Group_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.group.form.handler', 'request');
        }
        return $this->services['fos_user.group.form.handler'] = $this->scopedServices['request']['fos_user.group.form.handler'] = new \FOS\UserBundle\Form\Handler\GroupFormHandler($this->get('fos_user.group.form'), $this->get('request'), $this->get('fos_user.group_manager'));
    }
    protected function getFosUser_Group_Form_TypeService()
    {
        return $this->services['fos_user.group.form.type'] = new \FOS\UserBundle\Form\Type\GroupFormType('Application\\Sonata\\UserBundle\\Entity\\Group');
    }
    protected function getFosUser_GroupManagerService()
    {
        return $this->services['fos_user.group_manager'] = new \FOS\UserBundle\Doctrine\GroupManager($this->get('fos_user.entity_manager'), 'Application\\Sonata\\UserBundle\\Entity\\Group');
    }
    protected function getFosUser_MailerService()
    {
        return $this->services['fos_user.mailer'] = new \FOS\UserBundle\Mailer\Mailer($this->get('swiftmailer.mailer.default'), $this->get('router'), $this->get('templating'), array('confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig', 'resetting.template' => 'FOSUserBundle:Resetting:email.txt.twig', 'from_email' => array('confirmation' => array('webmaster@example.com' => 'webmaster'), 'resetting' => array('webmaster@example.com' => 'webmaster'))));
    }
    protected function getFosUser_Profile_FormService()
    {
        return $this->services['fos_user.profile.form'] = $this->get('form.factory')->createNamed('fos_user_profile_form', 'fos_user_profile', NULL, array('validation_groups' => array(0 => 'Authentication')));
    }
    protected function getFosUser_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.profile.form.handler', 'request');
        }
        return $this->services['fos_user.profile.form.handler'] = $this->scopedServices['request']['fos_user.profile.form.handler'] = new \FOS\UserBundle\Form\Handler\ProfileFormHandler($this->get('fos_user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Profile_Form_TypeService()
    {
        return $this->services['fos_user.profile.form.type'] = new \FOS\UserBundle\Form\Type\ProfileFormType('Application\\Sonata\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Registration_FormService()
    {
        return $this->services['fos_user.registration.form'] = $this->get('form.factory')->createNamed('fos_user_registration_form', 'fos_user_registration', NULL, array('validation_groups' => array(0 => 'Registration', 1 => 'Default')));
    }
    protected function getFosUser_Registration_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.registration.form.handler', 'request');
        }
        return $this->services['fos_user.registration.form.handler'] = $this->scopedServices['request']['fos_user.registration.form.handler'] = new \FOS\UserBundle\Form\Handler\RegistrationFormHandler($this->get('fos_user.registration.form'), $this->get('request'), $this->get('fos_user.user_manager'), $this->get('fos_user.mailer'), $this->get('fos_user.util.token_generator'));
    }
    protected function getFosUser_Registration_Form_TypeService()
    {
        return $this->services['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('Application\\Sonata\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_Resetting_FormService()
    {
        return $this->services['fos_user.resetting.form'] = $this->get('form.factory')->createNamed('fos_user_resetting_form', 'fos_user_resetting', NULL, array('validation_groups' => array(0 => 'ResetPassword', 1 => 'Default')));
    }
    protected function getFosUser_Resetting_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('fos_user.resetting.form.handler', 'request');
        }
        return $this->services['fos_user.resetting.form.handler'] = $this->scopedServices['request']['fos_user.resetting.form.handler'] = new \FOS\UserBundle\Form\Handler\ResettingFormHandler($this->get('fos_user.resetting.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Resetting_Form_TypeService()
    {
        return $this->services['fos_user.resetting.form.type'] = new \FOS\UserBundle\Form\Type\ResettingFormType();
    }
    protected function getFosUser_Security_InteractiveLoginListenerService()
    {
        return $this->services['fos_user.security.interactive_login_listener'] = new \FOS\UserBundle\Security\InteractiveLoginListener($this->get('fos_user.user_manager'));
    }
    protected function getFosUser_Security_LoginManagerService()
    {
        return $this->services['fos_user.security.login_manager'] = new \FOS\UserBundle\Security\LoginManager($this->get('security.context'), $this->get('security.user_checker'), $this->get('security.authentication.session_strategy'), $this);
    }
    protected function getFosUser_UserManagerService()
    {
        $a = $this->get('fos_user.util.email_canonicalizer');
        return $this->services['fos_user.user_manager'] = new \FOS\UserBundle\Doctrine\UserManager($this->get('security.encoder_factory'), $a, $a, $this->get('fos_user.entity_manager'), 'Application\\Sonata\\UserBundle\\Entity\\User');
    }
    protected function getFosUser_UsernameFormTypeService()
    {
        return $this->services['fos_user.username_form_type'] = new \FOS\UserBundle\Form\Type\UsernameFormType(new \FOS\UserBundle\Form\DataTransformer\UserToUsernameTransformer($this->get('fos_user.user_manager')));
    }
    protected function getFosUser_Util_EmailCanonicalizerService()
    {
        return $this->services['fos_user.util.email_canonicalizer'] = new \FOS\UserBundle\Util\Canonicalizer();
    }
    protected function getFosUser_Util_TokenGeneratorService()
    {
        return $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator($this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getFosUser_Util_UserManipulatorService()
    {
        return $this->services['fos_user.util.user_manipulator'] = new \FOS\UserBundle\Util\UserManipulator($this->get('fos_user.user_manager'));
    }
    protected function getFragment_HandlerService()
    {
        $this->services['fragment.handler'] = $instance = new \Symfony\Component\HttpKernel\Fragment\FragmentHandler(array(), false);
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->addRenderer($this->get('fragment.renderer.inline'));
        $instance->addRenderer($this->get('fragment.renderer.hinclude'));
        return $instance;
    }
    protected function getFragment_Renderer_HincludeService()
    {
        $this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Bundle\FrameworkBundle\Fragment\ContainerAwareHIncludeFragmentRenderer($this, $this->get('uri_signer'), NULL);
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getFragment_Renderer_InlineService()
    {
        $this->services['fragment.renderer.inline'] = $instance = new \Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer($this->get('http_kernel'), $this->get('event_dispatcher'));
        $instance->setFragmentPath('/_fragment');
        return $instance;
    }
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\DependencyInjection\ContainerAwareHttpKernel($this->get('event_dispatcher'), $this, $this->get('jms_di_extra.controller_resolver'));
    }
    protected function getJmsAop_InterceptorLoaderService()
    {
        return $this->services['jms_aop.interceptor_loader'] = new \JMS\AopBundle\Aop\InterceptorLoader($this, array());
    }
    protected function getJmsAop_PointcutContainerService()
    {
        return $this->services['jms_aop.pointcut_container'] = new \JMS\AopBundle\Aop\PointcutContainer(array('security.access.method_interceptor' => $this->get('security.access.pointcut')));
    }
    protected function getJmsDiExtra_Metadata_ConverterService()
    {
        return $this->services['jms_di_extra.metadata.converter'] = new \JMS\DiExtraBundle\Metadata\MetadataConverter();
    }
    protected function getJmsDiExtra_Metadata_MetadataFactoryService()
    {
        $this->services['jms_di_extra.metadata.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'jms_di_extra.metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $instance->setCache(new \Metadata\Cache\FileCache('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_diextra/metadata'));
        return $instance;
    }
    protected function getJmsDiExtra_MetadataDriverService()
    {
        return $this->services['jms_di_extra.metadata_driver'] = new \JMS\DiExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'));
    }
    protected function getKernelService()
    {
        throw new RuntimeException('You have requested a synthetic service ("kernel"). The DIC does not know how to construct this service.');
    }
    protected function getKnpMenu_FactoryService()
    {
        return $this->services['knp_menu.factory'] = new \Knp\Menu\Silex\RouterAwareFactory($this->get('router'));
    }
    protected function getKnpMenu_MenuProviderService()
    {
        return $this->services['knp_menu.menu_provider'] = new \Knp\Menu\Provider\ChainProvider(array(0 => new \Knp\Bundle\MenuBundle\Provider\ContainerAwareProvider($this, array()), 1 => new \Knp\Bundle\MenuBundle\Provider\BuilderAliasProvider($this->get('kernel'), $this, $this->get('knp_menu.factory'))));
    }
    protected function getKnpMenu_Renderer_ListService()
    {
        return $this->services['knp_menu.renderer.list'] = new \Knp\Menu\Renderer\ListRenderer(array(), 'UTF-8');
    }
    protected function getKnpMenu_Renderer_TwigService()
    {
        return $this->services['knp_menu.renderer.twig'] = new \Knp\Menu\Renderer\TwigRenderer($this->get('twig'), 'knp_menu.html.twig', array());
    }
    protected function getKnpMenu_RendererProviderService()
    {
        return $this->services['knp_menu.renderer_provider'] = new \Knp\Bundle\MenuBundle\Renderer\ContainerAwareProvider($this, 'twig', array('list' => 'knp_menu.renderer.list', 'twig' => 'knp_menu.renderer.twig'));
    }
    protected function getLocaleListenerService()
    {
        $this->services['locale_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\LocaleListener('fr', $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Handler_DebugService()
    {
        return $this->services['monolog.handler.debug'] = new \Symfony\Bridge\Monolog\Handler\DebugHandler(100, true);
    }
    protected function getMonolog_Handler_FirephpService()
    {
        return $this->services['monolog.handler.firephp'] = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);
    }
    protected function getMonolog_Handler_MainService()
    {
        return $this->services['monolog.handler.main'] = new \Monolog\Handler\StreamHandler('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/logs/dev.log', 100, true);
    }
    protected function getMonolog_Logger_DoctrineService()
    {
        $this->services['monolog.logger.doctrine'] = $instance = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_EmergencyService()
    {
        $this->services['monolog.logger.emergency'] = $instance = new \Symfony\Bridge\Monolog\Logger('emergency');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_RouterService()
    {
        $this->services['monolog.logger.router'] = $instance = new \Symfony\Bridge\Monolog\Logger('router');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getMonolog_Logger_SecurityService()
    {
        $this->services['monolog.logger.security'] = $instance = new \Symfony\Bridge\Monolog\Logger('security');
        $instance->pushHandler($this->get('monolog.handler.firephp'));
        $instance->pushHandler($this->get('monolog.handler.main'));
        $instance->pushHandler($this->get('monolog.handler.debug'));
        return $instance;
    }
    protected function getProfilerService()
    {
        $a = $this->get('monolog.logger.profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $b = $this->get('kernel', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $c = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $c->setKernel($b);
        }
        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage('file:/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/profiler', '', '', 86400), $a);
        $instance->add($c);
        $instance->add($this->get('data_collector.request'));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add($this->get('data_collector.router'));
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector($this->get('doctrine')));
        $instance->add(new \Sonata\BlockBundle\Profiler\DataCollector\BlockDataCollector($this->get('sonata.block.templating.helper'), array(0 => 'sonata.page.block.container', 1 => 'cmf.block.container', 2 => 'cmf.block.slideshow')));
        return $instance;
    }
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener($this->get('profiler'), NULL, false, false);
    }
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor();
    }
    protected function getRequestService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('request', 'request');
        }
        throw new RuntimeException('You have requested a synthetic service ("request"). The DIC does not know how to construct this service.');
    }
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }
    protected function getRouterService()
    {
        return $this->services['router'] = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/assetic/routing.yml', array('cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev', 'debug' => false, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevUrlMatcher', 'strict_requirements' => false), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouterListenerService()
    {
        $this->services['router_listener'] = $instance = new \Symfony\Component\HttpKernel\EventListener\RouterListener($this->get('router'), $this->get('router.request_context', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        return $instance;
    }
    protected function getRouting_LoaderService()
    {
        $a = $this->get('file_locator');
        $b = $this->get('annotation_reader');
        $c = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);
        $d = new \Symfony\Component\Config\Loader\LoaderResolver();
        $d->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($a));
        $d->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($a));
        $d->addLoader(new \Symfony\Bundle\AsseticBundle\Routing\AsseticLoader($this->get('assetic.asset_manager')));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($a, $c));
        $d->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($a, $c));
        $d->addLoader($c);
        $d->addLoader($this->get('sonata.admin.route_loader'));
        return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($this->get('controller_name_converter'), $this->get('monolog.logger.router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $d);
    }
    protected function getSecurity_Access_DecisionManagerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\LazyLoadingExpressionVoter($this->get('security.expressions.handler'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $a->setLazyCompiler($this, 'security.expressions.compiler');
        $a->setCacheDir('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_security/expressions');
        return $this->services['security.access.decision_manager'] = new \JMS\SecurityExtraBundle\Security\Authorization\RememberingAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(array(0 => $a, 1 => new \Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter($this->get('security.role_hierarchy')), 2 => new \Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter($this->get('security.authentication.trust_resolver'))), 'affirmative', false, true));
    }
    protected function getSecurity_Access_MethodInterceptorService()
    {
        return $this->services['security.access.method_interceptor'] = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\MethodSecurityInterceptor($this->get('security.context'), $this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), new \JMS\SecurityExtraBundle\Security\Authorization\AfterInvocation\AfterInvocationManager(array()), new \JMS\SecurityExtraBundle\Security\Authorization\RunAsManager('RunAsToken', 'ROLE_'), $this->get('security.extra.metadata_factory'), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Access_PointcutService()
    {
        $this->services['security.access.pointcut'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Interception\SecurityPointcut($this->get('security.extra.metadata_factory'), false, array());
        $instance->setSecuredClasses(array());
        return $instance;
    }
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }
    protected function getSecurity_ContextService()
    {
        return $this->services['security.context'] = new \Symfony\Component\Security\Core\SecurityContext($this->get('security.authentication.manager'), $this->get('security.access.decision_manager'), false);
    }
    protected function getSecurity_EncoderFactoryService()
    {
        return $this->services['security.encoder_factory'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(array('FOS\\UserBundle\\Model\\UserInterface' => array('class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder', 'arguments' => array(0 => 'sha512', 1 => true, 2 => 5000))));
    }
    protected function getSecurity_Expressions_CompilerService()
    {
        $a = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ContainerAwareVariableCompiler();
        $a->setMaps(array('trust_resolver' => 'security.authentication.trust_resolver', 'role_hierarchy' => 'security.role_hierarchy', 'permission_evaluator' => 'security.acl.permission_evaluator'), array());
        $this->services['security.expressions.compiler'] = $instance = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ExpressionCompiler();
        $instance->addFunctionCompiler(new \JMS\SecurityExtraBundle\Security\Acl\Expression\HasPermissionFunctionCompiler());
        $instance->addTypeCompiler(new \JMS\SecurityExtraBundle\Security\Authorization\Expression\Compiler\ParameterExpressionCompiler());
        $instance->addTypeCompiler($a);
        return $instance;
    }
    protected function getSecurity_Expressions_ReverseInterpreterService()
    {
        return $this->services['security.expressions.reverse_interpreter'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ReverseInterpreter($this->get('security.expressions.compiler'), $this->get('security.expressions.handler'));
    }
    protected function getSecurity_Extra_MetadataDriverService()
    {
        return $this->services['security.extra.metadata_driver'] = new \Metadata\Driver\DriverChain(array(0 => new \JMS\SecurityExtraBundle\Metadata\Driver\AnnotationDriver($this->get('annotation_reader'))));
    }
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Component\Security\Http\Firewall(new \Symfony\Bundle\SecurityBundle\Security\FirewallMap($this, array('security.firewall.map.context.admin' => new \Symfony\Component\HttpFoundation\RequestMatcher('/admin(.*)'), 'security.firewall.map.context.main' => new \Symfony\Component\HttpFoundation\RequestMatcher('.*'))), $this->get('event_dispatcher'));
    }
    protected function getSecurity_Firewall_Map_Context_AdminService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/admin/login'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/admin/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/admin/login', 'use_referer' => true, 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path'));
        $g->setProviderKey('admin');
        return $this->services['security.firewall.map.context.admin'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $a, 'admin', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array('login_path' => '/admin/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $d), array('check_path' => '/admin/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $e), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5363efc64fba3', $d), 5 => $this->get('security.access_listener'), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $this->get('fos_user.user_manager'), $this->get('security.user_checker'), 'admin', $this->get('security.access.decision_manager'), $d, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $e)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'admin', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/admin/login', false), NULL, NULL, $d));
    }
    protected function getSecurity_Firewall_Map_Context_MainService()
    {
        $a = $this->get('security.http_utils');
        $b = $this->get('security.context');
        $c = $this->get('http_kernel');
        $d = $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $e = $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        $f = new \Symfony\Component\Security\Http\Firewall\LogoutListener($b, $a, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($a, '/'), array('csrf_parameter' => '_csrf_token', 'intention' => 'logout', 'logout_path' => '/logout'));
        $f->addHandler($this->get('security.logout.handler.session'));
        $g = new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler($a, array('login_path' => '/login', 'always_use_default_target_path' => false, 'default_target_path' => '/', 'target_path_parameter' => '_target_path', 'use_referer' => false));
        $g->setProviderKey('main');
        return $this->services['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(array(0 => $this->get('security.channel_listener'), 1 => $this->get('security.context_listener.0'), 2 => $f, 3 => new \Symfony\Component\Security\Http\Firewall\UsernamePasswordFormAuthenticationListener($b, $this->get('security.authentication.manager'), $this->get('security.authentication.session_strategy'), $a, 'main', $g, new \Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler($c, $a, array('login_path' => '/login', 'failure_path' => NULL, 'failure_forward' => false, 'failure_path_parameter' => '_failure_path'), $d), array('check_path' => '/login_check', 'use_forward' => false, 'require_previous_session' => true, 'username_parameter' => '_username', 'password_parameter' => '_password', 'csrf_parameter' => '_csrf_token', 'intention' => 'authenticate', 'post_only' => true), $d, $e), 4 => new \Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener($b, '5363efc64fba3', $d), 5 => $this->get('security.access_listener'), 6 => new \Symfony\Component\Security\Http\Firewall\SwitchUserListener($b, $this->get('fos_user.user_manager'), $this->get('security.user_checker'), 'main', $this->get('security.access.decision_manager'), $d, '_switch_user', 'ROLE_ALLOWED_TO_SWITCH', $e)), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($b, $this->get('security.authentication.trust_resolver'), $a, 'main', new \Symfony\Component\Security\Http\EntryPoint\FormAuthenticationEntryPoint($c, $a, '/login', false), NULL, NULL, $d));
    }
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH'), 'SONATA' => array(0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT')));
    }
    protected function getSecurity_SecureRandomService()
    {
        return $this->services['security.secure_random'] = new \Symfony\Component\Security\Core\Util\SecureRandom('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/secure_random.seed', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Validator_UserPasswordService()
    {
        return $this->services['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator($this->get('security.context'), $this->get('security.encoder_factory'));
    }
    protected function getSensioDistribution_WebconfiguratorService()
    {
        return $this->services['sensio_distribution.webconfigurator'] = new \Sensio\Bundle\DistributionBundle\Configurator\Configurator('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app');
    }
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\CacheListener();
    }
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener($this->get('annotation_reader'));
    }
    protected function getSensioFrameworkExtra_Converter_DatetimeService()
    {
        return $this->services['sensio_framework_extra.converter.datetime'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter();
    }
    protected function getSensioFrameworkExtra_Converter_Doctrine_OrmService()
    {
        return $this->services['sensio_framework_extra.converter.doctrine.orm'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter($this->get('doctrine', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($this->get('sensio_framework_extra.converter.manager'));
    }
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $instance->add($this->get('sensio_framework_extra.converter.doctrine.orm'), 0, 'doctrine.orm');
        $instance->add($this->get('sensio_framework_extra.converter.datetime'), 0, 'datetime');
        return $instance;
    }
    protected function getSensioFrameworkExtra_View_GuesserService()
    {
        return $this->services['sensio_framework_extra.view.guesser'] = new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser($this->get('kernel'));
    }
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener($this);
    }
    protected function getServiceContainerService()
    {
        throw new RuntimeException('You have requested a synthetic service ("service_container"). The DIC does not know how to construct this service.');
    }
    protected function getSessionService()
    {
        return $this->services['session'] = new \Symfony\Component\HttpFoundation\Session\Session($this->get('session.storage.native'), new \Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag(), new \Symfony\Component\HttpFoundation\Session\Flash\FlashBag());
    }
    protected function getSession_HandlerService()
    {
        return $this->services['session.handler'] = new \Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/sessions');
    }
    protected function getSession_Storage_FilesystemService()
    {
        return $this->services['session.storage.filesystem'] = new \Symfony\Component\HttpFoundation\Session\Storage\MockFileSessionStorage('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/sessions');
    }
    protected function getSession_Storage_NativeService()
    {
        return $this->services['session.storage.native'] = new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage(array(), $this->get('session.handler'));
    }
    protected function getSession_Storage_PhpBridgeService()
    {
        return $this->services['session.storage.php_bridge'] = new \Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage($this->get('session.handler'));
    }
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SessionListener($this);
    }
    protected function getSonata_Admin_Audit_ManagerService()
    {
        return $this->services['sonata.admin.audit.manager'] = new \Sonata\AdminBundle\Model\AuditManager($this);
    }
    protected function getSonata_Admin_Audit_Orm_ReaderService()
    {
        return $this->services['sonata.admin.audit.orm.reader'] = new \Sonata\DoctrineORMAdminBundle\Model\AuditReader(NULL);
    }
    protected function getSonata_Admin_Block_AdminListService()
    {
        return $this->services['sonata.admin.block.admin_list'] = new \Sonata\AdminBundle\Block\AdminListBlockService('sonata.admin.block.admin_list', $this->get('templating'), $this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Block_SearchResultService()
    {
        return $this->services['sonata.admin.block.search_result'] = new \Sonata\AdminBundle\Block\AdminSearchBlockService('sonata.admin.block.search_result', $this->get('templating'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.search.handler'));
    }
    protected function getSonata_Admin_Builder_Filter_FactoryService()
    {
        return $this->services['sonata.admin.builder.filter.factory'] = new \Sonata\AdminBundle\Filter\FilterFactory($this, array('doctrine_orm_boolean' => 'sonata.admin.orm.filter.type.boolean', 'doctrine_orm_callback' => 'sonata.admin.orm.filter.type.callback', 'doctrine_orm_choice' => 'sonata.admin.orm.filter.type.choice', 'doctrine_orm_model' => 'sonata.admin.orm.filter.type.model', 'doctrine_orm_string' => 'sonata.admin.orm.filter.type.string', 'doctrine_orm_number' => 'sonata.admin.orm.filter.type.number', 'doctrine_orm_date' => 'sonata.admin.orm.filter.type.date', 'doctrine_orm_date_range' => 'sonata.admin.orm.filter.type.date_range', 'doctrine_orm_datetime' => 'sonata.admin.orm.filter.type.datetime', 'doctrine_orm_time' => 'sonata.admin.orm.filter.type.time', 'doctrine_orm_datetime_range' => 'sonata.admin.orm.filter.type.datetime_range', 'doctrine_orm_class' => 'sonata.admin.orm.filter.type.class'));
    }
    protected function getSonata_Admin_Builder_OrmDatagridService()
    {
        return $this->services['sonata.admin.builder.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Builder\DatagridBuilder($this->get('form.factory'), $this->get('sonata.admin.builder.filter.factory'), $this->get('sonata.admin.guesser.orm_datagrid_chain'), true);
    }
    protected function getSonata_Admin_Builder_OrmFormService()
    {
        return $this->services['sonata.admin.builder.orm_form'] = new \Sonata\DoctrineORMAdminBundle\Builder\FormContractor($this->get('form.factory'));
    }
    protected function getSonata_Admin_Builder_OrmListService()
    {
        return $this->services['sonata.admin.builder.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Builder\ListBuilder($this->get('sonata.admin.guesser.orm_list_chain'), array('array' => 'SonataAdminBundle:CRUD:list_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:list_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:list_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'identifier' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig'));
    }
    protected function getSonata_Admin_Builder_OrmShowService()
    {
        return $this->services['sonata.admin.builder.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Builder\ShowBuilder($this->get('sonata.admin.guesser.orm_show_chain'), array('array' => 'SonataAdminBundle:CRUD:show_array.html.twig', 'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig', 'date' => 'SonataAdminBundle:CRUD:show_date.html.twig', 'time' => 'SonataAdminBundle:CRUD:show_time.html.twig', 'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig', 'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig', 'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig', 'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig', 'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig'));
    }
    protected function getSonata_Admin_Controller_AdminService()
    {
        return $this->services['sonata.admin.controller.admin'] = new \Sonata\AdminBundle\Controller\HelperController($this->get('twig'), $this->get('sonata.admin.pool'), $this->get('sonata.admin.helper'));
    }
    protected function getSonata_Admin_Event_ExtensionService()
    {
        return $this->services['sonata.admin.event.extension'] = new \Sonata\AdminBundle\Event\AdminEventExtension($this->get('event_dispatcher'));
    }
    protected function getSonata_Admin_ExporterService()
    {
        return $this->services['sonata.admin.exporter'] = new \Sonata\AdminBundle\Export\Exporter();
    }
    protected function getSonata_Admin_Form_Extension_FieldService()
    {
        return $this->services['sonata.admin.form.extension.field'] = new \Sonata\AdminBundle\Form\Extension\Field\Type\FormTypeFieldExtension(array('email' => 'span5', 'textarea' => 'span5', 'text' => 'span5', 'choice' => 'span5', 'integer' => 'span5', 'datetime' => 'sonata-medium-date', 'date' => 'sonata-medium-date'));
    }
    protected function getSonata_Admin_Form_Filter_Type_ChoiceService()
    {
        return $this->services['sonata.admin.form.filter.type.choice'] = new \Sonata\AdminBundle\Form\Type\Filter\ChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DateService()
    {
        return $this->services['sonata.admin.form.filter.type.date'] = new \Sonata\AdminBundle\Form\Type\Filter\DateType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DaterangeService()
    {
        return $this->services['sonata.admin.form.filter.type.daterange'] = new \Sonata\AdminBundle\Form\Type\Filter\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.filter.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\Filter\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Filter_Type_DefaultService()
    {
        return $this->services['sonata.admin.form.filter.type.default'] = new \Sonata\AdminBundle\Form\Type\Filter\DefaultType();
    }
    protected function getSonata_Admin_Form_Filter_Type_NumberService()
    {
        return $this->services['sonata.admin.form.filter.type.number'] = new \Sonata\AdminBundle\Form\Type\Filter\NumberType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_AdminService()
    {
        return $this->services['sonata.admin.form.type.admin'] = new \Sonata\AdminBundle\Form\Type\AdminType();
    }
    protected function getSonata_Admin_Form_Type_ArrayService()
    {
        return $this->services['sonata.admin.form.type.array'] = new \Sonata\AdminBundle\Form\Type\ImmutableArrayType();
    }
    protected function getSonata_Admin_Form_Type_BooleanService()
    {
        return $this->services['sonata.admin.form.type.boolean'] = new \Sonata\AdminBundle\Form\Type\BooleanType();
    }
    protected function getSonata_Admin_Form_Type_CollectionService()
    {
        return $this->services['sonata.admin.form.type.collection'] = new \Sonata\AdminBundle\Form\Type\CollectionType();
    }
    protected function getSonata_Admin_Form_Type_DateRangeService()
    {
        return $this->services['sonata.admin.form.type.date_range'] = new \Sonata\AdminBundle\Form\Type\DateRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_DatetimeRangeService()
    {
        return $this->services['sonata.admin.form.type.datetime_range'] = new \Sonata\AdminBundle\Form\Type\DateTimeRangeType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_EqualService()
    {
        return $this->services['sonata.admin.form.type.equal'] = new \Sonata\AdminBundle\Form\Type\EqualType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Form_Type_ModelChoiceService()
    {
        return $this->services['sonata.admin.form.type.model_choice'] = new \Sonata\AdminBundle\Form\Type\ModelType();
    }
    protected function getSonata_Admin_Form_Type_ModelListService()
    {
        return $this->services['sonata.admin.form.type.model_list'] = new \Sonata\AdminBundle\Form\Type\ModelTypeList();
    }
    protected function getSonata_Admin_Form_Type_ModelReferenceService()
    {
        return $this->services['sonata.admin.form.type.model_reference'] = new \Sonata\AdminBundle\Form\Type\ModelReferenceType();
    }
    protected function getSonata_Admin_Form_Type_TranslatableChoiceService()
    {
        return $this->services['sonata.admin.form.type.translatable_choice'] = new \Sonata\AdminBundle\Form\Type\TranslatableChoiceType($this->get('translator.default'));
    }
    protected function getSonata_Admin_Guesser_OrmDatagridService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid'] = new \Sonata\DoctrineORMAdminBundle\Guesser\FilterTypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmDatagridChainService()
    {
        return $this->services['sonata.admin.guesser.orm_datagrid_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_datagrid')));
    }
    protected function getSonata_Admin_Guesser_OrmListService()
    {
        return $this->services['sonata.admin.guesser.orm_list'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmListChainService()
    {
        return $this->services['sonata.admin.guesser.orm_list_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_list')));
    }
    protected function getSonata_Admin_Guesser_OrmShowService()
    {
        return $this->services['sonata.admin.guesser.orm_show'] = new \Sonata\DoctrineORMAdminBundle\Guesser\TypeGuesser();
    }
    protected function getSonata_Admin_Guesser_OrmShowChainService()
    {
        return $this->services['sonata.admin.guesser.orm_show_chain'] = new \Sonata\AdminBundle\Guesser\TypeGuesserChain(array(0 => $this->get('sonata.admin.guesser.orm_show')));
    }
    protected function getSonata_Admin_HelperService()
    {
        return $this->services['sonata.admin.helper'] = new \Sonata\AdminBundle\Admin\AdminHelper($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Label_Strategy_BcService()
    {
        return $this->services['sonata.admin.label.strategy.bc'] = new \Sonata\AdminBundle\Translator\BCLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_FormComponentService()
    {
        return $this->services['sonata.admin.label.strategy.form_component'] = new \Sonata\AdminBundle\Translator\FormLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NativeService()
    {
        return $this->services['sonata.admin.label.strategy.native'] = new \Sonata\AdminBundle\Translator\NativeLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_NoopService()
    {
        return $this->services['sonata.admin.label.strategy.noop'] = new \Sonata\AdminBundle\Translator\NoopLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Label_Strategy_UnderscoreService()
    {
        return $this->services['sonata.admin.label.strategy.underscore'] = new \Sonata\AdminBundle\Translator\UnderscoreLabelTranslatorStrategy();
    }
    protected function getSonata_Admin_Manager_OrmService()
    {
        return $this->services['sonata.admin.manager.orm'] = new \Sonata\DoctrineORMAdminBundle\Model\ModelManager($this->get('doctrine'));
    }
    protected function getSonata_Admin_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminAclManipulator('Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Manipulator_Acl_Object_OrmService()
    {
        return $this->services['sonata.admin.manipulator.acl.object.orm'] = new \Sonata\DoctrineORMAdminBundle\Util\ObjectAclManipulator();
    }
    protected function getSonata_Admin_Object_Manipulator_Acl_AdminService()
    {
        return $this->services['sonata.admin.object.manipulator.acl.admin'] = new \Sonata\AdminBundle\Util\AdminObjectAclManipulator($this->get('form.factory'), 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder');
    }
    protected function getSonata_Admin_Orm_Filter_Type_BooleanService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\BooleanFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_CallbackService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\CallbackFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ChoiceService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ChoiceFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ClassService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ClassFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DateRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_DatetimeRangeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\DateTimeRangeFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_ModelService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\ModelFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_NumberService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\NumberFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_StringService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\StringFilter();
    }
    protected function getSonata_Admin_Orm_Filter_Type_TimeService()
    {
        return new \Sonata\DoctrineORMAdminBundle\Filter\TimeFilter();
    }
    protected function getSonata_Admin_PoolService()
    {
        $this->services['sonata.admin.pool'] = $instance = new \Sonata\AdminBundle\Admin\Pool($this, 'Sonata Project', '/bundles/sonataadmin/logo_title.png', array('html5_validate' => true, 'confirm_exit' => true, 'use_select2' => true));
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin\\Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig'));
        $instance->setAdminServiceIds(array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group'));
        $instance->setAdminGroups(array('sonata_user' => array('label' => 'sonata_user', 'label_catalogue' => 'SonataUserBundle', 'roles' => array(), 'items' => array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group'))));
        $instance->setAdminClasses(array('Application\\Sonata\\UserBundle\\Entity\\User' => 'sonata.user.admin.user', 'Application\\Sonata\\UserBundle\\Entity\\Group' => 'sonata.user.admin.group'));
        return $instance;
    }
    protected function getSonata_Admin_Route_DefaultGeneratorService()
    {
        return $this->services['sonata.admin.route.default_generator'] = new \Sonata\AdminBundle\Route\DefaultRouteGenerator($this->get('router'));
    }
    protected function getSonata_Admin_Route_PathInfoService()
    {
        return $this->services['sonata.admin.route.path_info'] = new \Sonata\AdminBundle\Route\PathInfoBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_Route_QueryStringService()
    {
        return $this->services['sonata.admin.route.query_string'] = new \Sonata\AdminBundle\Route\QueryStringBuilder($this->get('sonata.admin.audit.manager'));
    }
    protected function getSonata_Admin_RouteLoaderService()
    {
        return $this->services['sonata.admin.route_loader'] = new \Sonata\AdminBundle\Route\AdminPoolLoader($this->get('sonata.admin.pool'), array(0 => 'sonata.user.admin.user', 1 => 'sonata.user.admin.group'), $this);
    }
    protected function getSonata_Admin_Search_HandlerService()
    {
        return $this->services['sonata.admin.search.handler'] = new \Sonata\AdminBundle\Search\SearchHandler($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Security_HandlerService()
    {
        return $this->services['sonata.admin.security.handler'] = new \Sonata\AdminBundle\Security\Handler\NoopSecurityHandler();
    }
    protected function getSonata_Admin_Twig_ExtensionService()
    {
        return $this->services['sonata.admin.twig.extension'] = new \Sonata\AdminBundle\Twig\Extension\SonataAdminExtension($this->get('sonata.admin.pool'));
    }
    protected function getSonata_Admin_Twig_Extension_TextService()
    {
        return $this->services['sonata.admin.twig.extension.text'] = new \Twig_Extensions_Extension_Text();
    }
    protected function getSonata_Admin_Validator_InlineService()
    {
        return $this->services['sonata.admin.validator.inline'] = new \Sonata\AdminBundle\Validator\InlineValidator($this, $this->get('validator.validator_factory'));
    }
    protected function getSonata_AdminDoctrineOrm_Block_AuditService()
    {
        return $this->services['sonata.admin_doctrine_orm.block.audit'] = new \Sonata\DoctrineORMAdminBundle\Block\AuditBlockService('sonata.admin_doctrine_orm.block.audit', $this->get('templating'), NULL);
    }
    protected function getSonata_Block_Cache_Handler_DefaultService()
    {
        return $this->services['sonata.block.cache.handler.default'] = new \Sonata\BlockBundle\Cache\HttpCacheHandler();
    }
    protected function getSonata_Block_Cache_Handler_NoopService()
    {
        return $this->services['sonata.block.cache.handler.noop'] = new \Sonata\BlockBundle\Cache\NoopHttpCacheHandler();
    }
    protected function getSonata_Block_ContextManager_DefaultService()
    {
        return $this->services['sonata.block.context_manager.default'] = new \Sonata\BlockBundle\Block\BlockContextManager($this->get('sonata.block.loader.chain'), $this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')));
    }
    protected function getSonata_Block_Exception_Filter_DebugOnlyService()
    {
        return $this->services['sonata.block.exception.filter.debug_only'] = new \Sonata\BlockBundle\Exception\Filter\DebugOnlyFilter(false);
    }
    protected function getSonata_Block_Exception_Filter_IgnoreBlockExceptionService()
    {
        return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
    }
    protected function getSonata_Block_Exception_Filter_KeepAllService()
    {
        return $this->services['sonata.block.exception.filter.keep_all'] = new \Sonata\BlockBundle\Exception\Filter\KeepAllFilter();
    }
    protected function getSonata_Block_Exception_Filter_KeepNoneService()
    {
        return $this->services['sonata.block.exception.filter.keep_none'] = new \Sonata\BlockBundle\Exception\Filter\KeepNoneFilter();
    }
    protected function getSonata_Block_Exception_Renderer_InlineService()
    {
        return $this->services['sonata.block.exception.renderer.inline'] = new \Sonata\BlockBundle\Exception\Renderer\InlineRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception.html.twig');
    }
    protected function getSonata_Block_Exception_Renderer_InlineDebugService()
    {
        return $this->services['sonata.block.exception.renderer.inline_debug'] = new \Sonata\BlockBundle\Exception\Renderer\InlineDebugRenderer($this->get('templating'), 'SonataBlockBundle:Block:block_exception_debug.html.twig', false, true);
    }
    protected function getSonata_Block_Exception_Renderer_ThrowService()
    {
        return $this->services['sonata.block.exception.renderer.throw'] = new \Sonata\BlockBundle\Exception\Renderer\MonkeyThrowRenderer();
    }
    protected function getSonata_Block_Exception_Strategy_ManagerService()
    {
        $this->services['sonata.block.exception.strategy.manager'] = $instance = new \Sonata\BlockBundle\Exception\Strategy\StrategyManager($this, array('debug_only' => 'sonata.block.exception.filter.debug_only', 'ignore_block_exception' => 'sonata.block.exception.filter.ignore_block_exception', 'keep_all' => 'sonata.block.exception.filter.keep_all', 'keep_none' => 'sonata.block.exception.filter.keep_none'), array('inline' => 'sonata.block.exception.renderer.inline', 'inline_debug' => 'sonata.block.exception.renderer.inline_debug', 'throw' => 'sonata.block.exception.renderer.throw'), array(), array());
        $instance->setDefaultFilter('debug_only');
        $instance->setDefaultRenderer('throw');
        return $instance;
    }
    protected function getSonata_Block_Form_Type_BlockService()
    {
        return $this->services['sonata.block.form.type.block'] = new \Sonata\BlockBundle\Form\Type\ServiceListType($this->get('sonata.block.manager'), array('admin' => array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.search_result'), 'cms' => array(0 => 'sonata.user.block.menu', 1 => 'sonata.block.service.text', 2 => 'sonata.block.service.action', 3 => 'sonata.block.service.rss')));
    }
    protected function getSonata_Block_Loader_ChainService()
    {
        return $this->services['sonata.block.loader.chain'] = new \Sonata\BlockBundle\Block\BlockLoaderChain(array(0 => $this->get('sonata.block.loader.service')));
    }
    protected function getSonata_Block_Loader_ServiceService()
    {
        return $this->services['sonata.block.loader.service'] = new \Sonata\BlockBundle\Block\Loader\ServiceLoader(array(0 => 'sonata.admin.block.admin_list', 1 => 'sonata.admin.block.search_result', 2 => 'sonata.user.block.menu', 3 => 'sonata.block.service.text', 4 => 'sonata.block.service.action', 5 => 'sonata.block.service.rss'));
    }
    protected function getSonata_Block_Renderer_DefaultService()
    {
        return $this->services['sonata.block.renderer.default'] = new \Sonata\BlockBundle\Block\BlockRenderer($this->get('sonata.block.manager'), $this->get('sonata.block.exception.strategy.manager'), $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE), false);
    }
    protected function getSonata_Block_Service_EmptyService()
    {
        return $this->services['sonata.block.service.empty'] = new \Sonata\BlockBundle\Block\Service\EmptyBlockService('sonata.block.empty', $this->get('templating'));
    }
    protected function getSonata_Block_Service_RssService()
    {
        return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', $this->get('templating'));
    }
    protected function getSonata_Block_Service_TextService()
    {
        return $this->services['sonata.block.service.text'] = new \Sonata\BlockBundle\Block\Service\TextBlockService('sonata.block.text', $this->get('templating'));
    }
    protected function getSonata_Block_Twig_GlobalService()
    {
        return $this->services['sonata.block.twig.global'] = new \Sonata\BlockBundle\Twig\GlobalVariables($this, array('block_base' => 'SonataBlockBundle:Block:block_base.html.twig'));
    }
    protected function getSonata_Cache_Invalidation_SimpleService()
    {
        return $this->services['sonata.cache.invalidation.simple'] = new \Sonata\CacheBundle\Invalidation\SimpleCacheInvalidation($this->get('logger'));
    }
    protected function getSonata_Cache_ManagerService()
    {
        $this->services['sonata.cache.manager'] = $instance = new \Sonata\CacheBundle\Cache\CacheManager($this->get('sonata.cache.invalidation.simple'), array('sonata.cache.noop' => $this->get('sonata.cache.noop')));
        $instance->setRecorder($this->get('sonata.cache.recorder'));
        return $instance;
    }
    protected function getSonata_Cache_ModelIdentifierService()
    {
        return $this->services['sonata.cache.model_identifier'] = new \Sonata\CacheBundle\Invalidation\ModelCollectionIdentifiers(array());
    }
    protected function getSonata_Cache_NoopService()
    {
        return $this->services['sonata.cache.noop'] = new \Sonata\CacheBundle\Adapter\NoopCache();
    }
    protected function getSonata_Cache_Orm_EventSubscriberService()
    {
        return $this->services['sonata.cache.orm.event_subscriber'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListenerContainerAware($this, 'sonata.cache.orm.event_subscriber.default');
    }
    protected function getSonata_Cache_Orm_EventSubscriber_DefaultService()
    {
        return $this->services['sonata.cache.orm.event_subscriber.default'] = new \Sonata\CacheBundle\Invalidation\DoctrineORMListener($this->get('sonata.cache.model_identifier'), array('sonata.cache.noop' => $this->get('sonata.cache.noop')));
    }
    protected function getSonata_Cache_RecorderService()
    {
        return $this->services['sonata.cache.recorder'] = new \Sonata\CacheBundle\Invalidation\Recorder($this->get('sonata.cache.model_identifier'));
    }
    protected function getSonata_EasyExtends_Doctrine_MapperService()
    {
        $this->services['sonata.easy_extends.doctrine.mapper'] = $instance = new \Sonata\EasyExtendsBundle\Mapper\DoctrineORMMapper($this->get('doctrine'), array());
        $instance->addAssociation('Application\\Sonata\\UserBundle\\Entity\\User', 'mapManyToMany', array(0 => array('fieldName' => 'groups', 'targetEntity' => 'Application\\Sonata\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'fos_user_user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')))), 1 => array('fieldName' => 'groups', 'targetEntity' => 'Application\\Sonata\\UserBundle\\Entity\\Group', 'cascade' => array(), 'joinTable' => array('name' => 'fos_user_user_group', 'joinColumns' => array(0 => array('name' => 'user_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE')), 'inverseJoinColumns' => array(0 => array('name' => 'group_id', 'referencedColumnName' => 'id', 'onDelete' => 'CASCADE'))))));
        return $instance;
    }
    protected function getSonata_EasyExtends_Generator_BundleService()
    {
        return $this->services['sonata.easy_extends.generator.bundle'] = new \Sonata\EasyExtendsBundle\Generator\BundleGenerator();
    }
    protected function getSonata_EasyExtends_Generator_OdmService()
    {
        return $this->services['sonata.easy_extends.generator.odm'] = new \Sonata\EasyExtendsBundle\Generator\OdmGenerator();
    }
    protected function getSonata_EasyExtends_Generator_OrmService()
    {
        return $this->services['sonata.easy_extends.generator.orm'] = new \Sonata\EasyExtendsBundle\Generator\OrmGenerator();
    }
    protected function getSonata_EasyExtends_Generator_PhpcrService()
    {
        return $this->services['sonata.easy_extends.generator.phpcr'] = new \Sonata\EasyExtendsBundle\Generator\PHPCRGenerator();
    }
    protected function getSonata_User_Admin_GroupService()
    {
        $instance = new \Sonata\UserBundle\Admin\Entity\GroupAdmin('sonata.user.admin.group', 'Application\\Sonata\\UserBundle\\Entity\\Group', 'SonataAdminBundle:CRUD');
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('groups');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin\\Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Admin_UserService()
    {
        $instance = new \Application\Sonata\UserBundle\Admin\Entity\UserAdmin('sonata.user.admin.user', 'Application\\Sonata\\UserBundle\\Entity\\User', 'SonataAdminBundle:CRUD');
        $instance->setUserManager($this->get('fos_user.user_manager'));
        $instance->setTranslationDomain('SonataUserBundle');
        $instance->setSecurityContext($this->get('security.context'));
        $instance->setLabelTranslatorStrategy($this->get('sonata.admin.label.strategy.underscore'));
        $instance->setManagerType('orm');
        $instance->setModelManager($this->get('sonata.admin.manager.orm'));
        $instance->setFormContractor($this->get('sonata.admin.builder.orm_form'));
        $instance->setShowBuilder($this->get('sonata.admin.builder.orm_show'));
        $instance->setListBuilder($this->get('sonata.admin.builder.orm_list'));
        $instance->setDatagridBuilder($this->get('sonata.admin.builder.orm_datagrid'));
        $instance->setTranslator($this->get('translator.default'));
        $instance->setConfigurationPool($this->get('sonata.admin.pool'));
        $instance->setRouteGenerator($this->get('sonata.admin.route.default_generator'));
        $instance->setValidator($this->get('validator'));
        $instance->setSecurityHandler($this->get('sonata.admin.security.handler'));
        $instance->setMenuFactory($this->get('knp_menu.factory'));
        $instance->setRouteBuilder($this->get('sonata.admin.route.path_info'));
        $instance->setLabel('users');
        $instance->setPersistFilters(false);
        $instance->setTemplates(array('user_block' => 'SonataUserBundle:Admin\\Core:user_block.html.twig', 'layout' => 'SonataAdminBundle::standard_layout.html.twig', 'ajax' => 'SonataAdminBundle::ajax_layout.html.twig', 'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig', 'list' => 'SonataAdminBundle:CRUD:list.html.twig', 'show' => 'SonataAdminBundle:CRUD:show.html.twig', 'edit' => 'SonataAdminBundle:CRUD:edit.html.twig', 'history' => 'SonataAdminBundle:CRUD:history.html.twig', 'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig', 'acl' => 'SonataAdminBundle:CRUD:acl.html.twig', 'action' => 'SonataAdminBundle:CRUD:action.html.twig', 'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig', 'preview' => 'SonataAdminBundle:CRUD:preview.html.twig', 'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig', 'delete' => 'SonataAdminBundle:CRUD:delete.html.twig', 'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig', 'select' => 'SonataAdminBundle:CRUD:list__select.html.twig', 'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig', 'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig', 'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig', 'pager_links' => 'SonataAdminBundle:Pager:links.html.twig', 'pager_results' => 'SonataAdminBundle:Pager:results.html.twig', 'search' => 'SonataAdminBundle:Core:search.html.twig', 'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig'));
        $instance->setSecurityInformation(array());
        $instance->initialize();
        $instance->setFormTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig'));
        $instance->setFilterTheme(array(0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig'));
        return $instance;
    }
    protected function getSonata_User_Block_AccountService()
    {
        return $this->services['sonata.user.block.account'] = new \Sonata\UserBundle\Block\AccountBlockService('sonata.user.block.account', $this->get('templating'), $this->get('security.context'));
    }
    protected function getSonata_User_Block_MenuService()
    {
        return $this->services['sonata.user.block.menu'] = new \Sonata\UserBundle\Block\ProfileMenuBlockService('sonata.user.block.menu', $this->get('templating'), $this->get('sonata.user.profile.menu_builder'));
    }
    protected function getSonata_User_EditableRoleBuilderService()
    {
        return $this->services['sonata.user.editable_role_builder'] = new \Sonata\UserBundle\Security\EditableRolesBuilder($this->get('security.context'), $this->get('sonata.admin.pool'), array('ROLE_ADMIN' => array(0 => 'ROLE_USER', 1 => 'ROLE_SONATA_ADMIN'), 'ROLE_SUPER_ADMIN' => array(0 => 'ROLE_ADMIN', 1 => 'ROLE_ALLOWED_TO_SWITCH'), 'SONATA' => array(0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT')));
    }
    protected function getSonata_User_Form_GenderListService()
    {
        return $this->services['sonata.user.form.gender_list'] = new \Sonata\AdminBundle\Form\Type\StatusType('Application\\Sonata\\UserBundle\\Entity\\User', 'getGenderList', 'sonata_user_gender');
    }
    protected function getSonata_User_Form_Type_SecurityRolesService()
    {
        return $this->services['sonata.user.form.type.security_roles'] = new \Sonata\UserBundle\Form\Type\SecurityRolesType($this->get('sonata.user.editable_role_builder'));
    }
    protected function getSonata_User_Google_AuthenticatorService()
    {
        return $this->services['sonata.user.google.authenticator'] = new \Google\Authenticator\GoogleAuthenticator();
    }
    protected function getSonata_User_Google_Authenticator_InteractiveLoginListenerService()
    {
        return $this->services['sonata.user.google.authenticator.interactive_login_listener'] = new \Sonata\UserBundle\GoogleAuthenticator\InteractiveLoginListener($this->get('sonata.user.google.authenticator.provider'));
    }
    protected function getSonata_User_Google_Authenticator_ProviderService()
    {
        return $this->services['sonata.user.google.authenticator.provider'] = new \Sonata\UserBundle\GoogleAuthenticator\Helper('localhost', $this->get('sonata.user.google.authenticator'));
    }
    protected function getSonata_User_Google_Authenticator_RequestListenerService()
    {
        return $this->services['sonata.user.google.authenticator.request_listener'] = new \Sonata\UserBundle\GoogleAuthenticator\RequestListener($this->get('sonata.user.google.authenticator.provider'), $this->get('security.context'), $this->get('templating'));
    }
    protected function getSonata_User_Profile_FormService()
    {
        return $this->services['sonata.user.profile.form'] = $this->get('form.factory')->createNamed('sonata_user_profile_form', 'sonata_user_profile', NULL, array('validation_groups' => array(0 => 'Profile'), 'translation_domain' => 'SonataUserBundle'));
    }
    protected function getSonata_User_Profile_Form_HandlerService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('sonata.user.profile.form.handler', 'request');
        }
        return $this->services['sonata.user.profile.form.handler'] = $this->scopedServices['request']['sonata.user.profile.form.handler'] = new \Sonata\UserBundle\Form\Handler\ProfileFormHandler($this->get('sonata.user.profile.form'), $this->get('request'), $this->get('fos_user.user_manager'));
    }
    protected function getSonata_User_Profile_Form_TypeService()
    {
        return $this->services['sonata.user.profile.form.type'] = new \Application\Sonata\UserBundle\Form\Type\ProfileType('Application\\Sonata\\UserBundle\\Entity\\User');
    }
    protected function getSonata_User_Profile_MenuBuilderService()
    {
        return $this->services['sonata.user.profile.menu_builder'] = new \Sonata\UserBundle\Menu\ProfileMenuBuilder($this->get('knp_menu.factory'), $this->get('translator.default'), array(0 => array('route' => 'sonata_user_profile_edit', 'label' => 'link_edit_profile', 'domain' => 'SonataUserBundle', 'route_parameters' => array()), 1 => array('route' => 'sonata_user_profile_edit_authentication', 'label' => 'link_edit_authentication', 'domain' => 'SonataUserBundle', 'route_parameters' => array())), $this->get('event_dispatcher'));
    }
    protected function getSonata_User_Twig_GlobalService()
    {
        return $this->services['sonata.user.twig.global'] = new \Sonata\UserBundle\Twig\GlobalVariables($this);
    }
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }
    protected function getSwiftmailer_EmailSender_ListenerService()
    {
        return $this->services['swiftmailer.email_sender.listener'] = new \Symfony\Bundle\SwiftmailerBundle\EventListener\EmailSenderListener($this);
    }
    protected function getSwiftmailer_Mailer_DefaultService()
    {
        return $this->services['swiftmailer.mailer.default'] = new \Swift_Mailer($this->get('swiftmailer.mailer.default.transport'));
    }
    protected function getSwiftmailer_Mailer_Default_SpoolService()
    {
        return $this->services['swiftmailer.mailer.default.spool'] = new \Swift_MemorySpool();
    }
    protected function getSwiftmailer_Mailer_Default_TransportService()
    {
        return $this->services['swiftmailer.mailer.default.transport'] = new \Swift_Transport_SpoolTransport($this->get('swiftmailer.mailer.default.transport.eventdispatcher'), $this->get('swiftmailer.mailer.default.spool'));
    }
    protected function getSwiftmailer_Mailer_Default_Transport_RealService()
    {
        $this->services['swiftmailer.mailer.default.transport.real'] = $instance = new \Swift_Transport_EsmtpTransport(new \Swift_Transport_StreamBuffer(new \Swift_StreamFilters_StringReplacementFilterFactory()), array(0 => new \Swift_Transport_Esmtp_AuthHandler(array(0 => new \Swift_Transport_Esmtp_Auth_CramMd5Authenticator(), 1 => new \Swift_Transport_Esmtp_Auth_LoginAuthenticator(), 2 => new \Swift_Transport_Esmtp_Auth_PlainAuthenticator()))), $this->get('swiftmailer.mailer.default.transport.eventdispatcher'));
        $instance->setHost('127.0.0.1');
        $instance->setPort(25);
        $instance->setEncryption(NULL);
        $instance->setUsername(NULL);
        $instance->setPassword(NULL);
        $instance->setAuthMode(NULL);
        $instance->setTimeout(30);
        $instance->setSourceIp(NULL);
        return $instance;
    }
    protected function getTemplatingService()
    {
        $this->services['templating'] = $instance = new \Symfony\Bundle\TwigBundle\TwigEngine($this->get('twig'), $this->get('templating.name_parser'), $this->get('templating.locator'));
        $instance->setDefaultEscapingStrategy(array(0 => $instance, 1 => 'guessDefaultEscapingStrategy'));
        return $instance;
    }
    protected function getTemplating_Asset_PackageFactoryService()
    {
        return $this->services['templating.asset.package_factory'] = new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PackageFactory($this);
    }
    protected function getTemplating_FilenameParserService()
    {
        return $this->services['templating.filename_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateFilenameParser();
    }
    protected function getTemplating_GlobalsService()
    {
        return $this->services['templating.globals'] = new \Symfony\Bundle\FrameworkBundle\Templating\GlobalVariables($this);
    }
    protected function getTemplating_Helper_ActionsService()
    {
        return $this->services['templating.helper.actions'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\ActionsHelper($this->get('fragment.handler'));
    }
    protected function getTemplating_Helper_AssetsService()
    {
        if (!isset($this->scopedServices['request'])) {
            throw new InactiveScopeException('templating.helper.assets', 'request');
        }
        return $this->services['templating.helper.assets'] = $this->scopedServices['request']['templating.helper.assets'] = new \Symfony\Component\Templating\Helper\CoreAssetsHelper(new \Symfony\Bundle\FrameworkBundle\Templating\Asset\PathPackage($this->get('request'), NULL, '%s?%s'), array());
    }
    protected function getTemplating_Helper_CodeService()
    {
        return $this->services['templating.helper.code'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\CodeHelper(NULL, '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app', 'UTF-8');
    }
    protected function getTemplating_Helper_FormService()
    {
        $a = new \Symfony\Bundle\FrameworkBundle\Templating\PhpEngine($this->get('templating.name_parser'), $this, $this->get('templating.loader'), $this->get('templating.globals'));
        $a->setCharset('UTF-8');
        $a->setHelpers(array('slots' => 'templating.helper.slots', 'assets' => 'templating.helper.assets', 'request' => 'templating.helper.request', 'session' => 'templating.helper.session', 'router' => 'templating.helper.router', 'actions' => 'templating.helper.actions', 'code' => 'templating.helper.code', 'translator' => 'templating.helper.translator', 'form' => 'templating.helper.form', 'logout_url' => 'templating.helper.logout_url', 'security' => 'templating.helper.security', 'assetic' => 'assetic.helper.dynamic', 'sonata_block' => 'sonata.block.templating.helper'));
        return $this->services['templating.helper.form'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\FormHelper(new \Symfony\Component\Form\FormRenderer(new \Symfony\Component\Form\Extension\Templating\TemplatingRendererEngine($a, array(0 => 'FrameworkBundle:Form')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
    }
    protected function getTemplating_Helper_LogoutUrlService()
    {
        $this->services['templating.helper.logout_url'] = $instance = new \Symfony\Bundle\SecurityBundle\Templating\Helper\LogoutUrlHelper($this, $this->get('router'));
        $instance->registerListener('admin', '/admin/logout', 'logout', '_csrf_token', NULL);
        $instance->registerListener('main', '/logout', 'logout', '_csrf_token', NULL);
        return $instance;
    }
    protected function getTemplating_Helper_RequestService()
    {
        return $this->services['templating.helper.request'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RequestHelper($this->get('request'));
    }
    protected function getTemplating_Helper_RouterService()
    {
        return $this->services['templating.helper.router'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\RouterHelper($this->get('router'));
    }
    protected function getTemplating_Helper_SecurityService()
    {
        return $this->services['templating.helper.security'] = new \Symfony\Bundle\SecurityBundle\Templating\Helper\SecurityHelper($this->get('security.context', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTemplating_Helper_SessionService()
    {
        return $this->services['templating.helper.session'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\SessionHelper($this->get('request'));
    }
    protected function getTemplating_Helper_SlotsService()
    {
        return $this->services['templating.helper.slots'] = new \Symfony\Component\Templating\Helper\SlotsHelper();
    }
    protected function getTemplating_Helper_TranslatorService()
    {
        return $this->services['templating.helper.translator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Helper\TranslatorHelper($this->get('translator.default'));
    }
    protected function getTemplating_LoaderService()
    {
        return $this->services['templating.loader'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\FilesystemLoader($this->get('templating.locator'));
    }
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($this->get('kernel'));
    }
    protected function getTranslation_Dumper_CsvService()
    {
        return $this->services['translation.dumper.csv'] = new \Symfony\Component\Translation\Dumper\CsvFileDumper();
    }
    protected function getTranslation_Dumper_IniService()
    {
        return $this->services['translation.dumper.ini'] = new \Symfony\Component\Translation\Dumper\IniFileDumper();
    }
    protected function getTranslation_Dumper_MoService()
    {
        return $this->services['translation.dumper.mo'] = new \Symfony\Component\Translation\Dumper\MoFileDumper();
    }
    protected function getTranslation_Dumper_PhpService()
    {
        return $this->services['translation.dumper.php'] = new \Symfony\Component\Translation\Dumper\PhpFileDumper();
    }
    protected function getTranslation_Dumper_PoService()
    {
        return $this->services['translation.dumper.po'] = new \Symfony\Component\Translation\Dumper\PoFileDumper();
    }
    protected function getTranslation_Dumper_QtService()
    {
        return $this->services['translation.dumper.qt'] = new \Symfony\Component\Translation\Dumper\QtFileDumper();
    }
    protected function getTranslation_Dumper_ResService()
    {
        return $this->services['translation.dumper.res'] = new \Symfony\Component\Translation\Dumper\IcuResFileDumper();
    }
    protected function getTranslation_Dumper_XliffService()
    {
        return $this->services['translation.dumper.xliff'] = new \Symfony\Component\Translation\Dumper\XliffFileDumper();
    }
    protected function getTranslation_Dumper_YmlService()
    {
        return $this->services['translation.dumper.yml'] = new \Symfony\Component\Translation\Dumper\YamlFileDumper();
    }
    protected function getTranslation_ExtractorService()
    {
        $this->services['translation.extractor'] = $instance = new \Symfony\Component\Translation\Extractor\ChainExtractor();
        $instance->addExtractor('php', $this->get('translation.extractor.php'));
        $instance->addExtractor('twig', $this->get('twig.translation.extractor'));
        return $instance;
    }
    protected function getTranslation_Extractor_PhpService()
    {
        return $this->services['translation.extractor.php'] = new \Symfony\Bundle\FrameworkBundle\Translation\PhpExtractor();
    }
    protected function getTranslation_LoaderService()
    {
        $a = $this->get('translation.loader.xliff');
        $this->services['translation.loader'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\TranslationLoader();
        $instance->addLoader('php', $this->get('translation.loader.php'));
        $instance->addLoader('yml', $this->get('translation.loader.yml'));
        $instance->addLoader('xlf', $a);
        $instance->addLoader('xliff', $a);
        $instance->addLoader('po', $this->get('translation.loader.po'));
        $instance->addLoader('mo', $this->get('translation.loader.mo'));
        $instance->addLoader('ts', $this->get('translation.loader.qt'));
        $instance->addLoader('csv', $this->get('translation.loader.csv'));
        $instance->addLoader('res', $this->get('translation.loader.res'));
        $instance->addLoader('dat', $this->get('translation.loader.dat'));
        $instance->addLoader('ini', $this->get('translation.loader.ini'));
        return $instance;
    }
    protected function getTranslation_Loader_CsvService()
    {
        return $this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader();
    }
    protected function getTranslation_Loader_DatService()
    {
        return $this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_IniService()
    {
        return $this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader();
    }
    protected function getTranslation_Loader_MoService()
    {
        return $this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader();
    }
    protected function getTranslation_Loader_PhpService()
    {
        return $this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader();
    }
    protected function getTranslation_Loader_PoService()
    {
        return $this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader();
    }
    protected function getTranslation_Loader_QtService()
    {
        return $this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader();
    }
    protected function getTranslation_Loader_ResService()
    {
        return $this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader();
    }
    protected function getTranslation_Loader_XliffService()
    {
        return $this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader();
    }
    protected function getTranslation_Loader_YmlService()
    {
        return $this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader();
    }
    protected function getTranslation_WriterService()
    {
        $this->services['translation.writer'] = $instance = new \Symfony\Component\Translation\Writer\TranslationWriter();
        $instance->addDumper('php', $this->get('translation.dumper.php'));
        $instance->addDumper('xlf', $this->get('translation.dumper.xliff'));
        $instance->addDumper('po', $this->get('translation.dumper.po'));
        $instance->addDumper('mo', $this->get('translation.dumper.mo'));
        $instance->addDumper('yml', $this->get('translation.dumper.yml'));
        $instance->addDumper('ts', $this->get('translation.dumper.qt'));
        $instance->addDumper('csv', $this->get('translation.dumper.csv'));
        $instance->addDumper('ini', $this->get('translation.dumper.ini'));
        $instance->addDumper('res', $this->get('translation.dumper.res'));
        return $instance;
    }
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator($this, new \Symfony\Component\Translation\MessageSelector(), array('translation.loader.php' => array(0 => 'php'), 'translation.loader.yml' => array(0 => 'yml'), 'translation.loader.xliff' => array(0 => 'xlf', 1 => 'xliff'), 'translation.loader.po' => array(0 => 'po'), 'translation.loader.mo' => array(0 => 'mo'), 'translation.loader.qt' => array(0 => 'ts'), 'translation.loader.csv' => array(0 => 'csv'), 'translation.loader.res' => array(0 => 'res'), 'translation.loader.dat' => array(0 => 'dat'), 'translation.loader.ini' => array(0 => 'ini')), array('cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/translations', 'debug' => false));
        $instance->setFallbackLocales(array(0 => 'fr'));
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf', 'af', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf', 'cy', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf', 'no', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf', 'sq', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf', 'tr', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf', 'vi', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf', 'zh_TW', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf', 'ar', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf', 'bg', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf', 'ca', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf', 'cs', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf', 'da', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf', 'de', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf', 'el', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf', 'en', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf', 'es', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf', 'et', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf', 'eu', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf', 'fa', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf', 'fi', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf', 'fr', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf', 'gl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf', 'he', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf', 'hr', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf', 'hu', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf', 'hy', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf', 'id', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf', 'it', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf', 'ja', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf', 'lb', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf', 'lt', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf', 'lv', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf', 'mn', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf', 'nb', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf', 'nl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf', 'pl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf', 'pt', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf', 'pt_BR', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf', 'ro', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf', 'ru', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf', 'sk', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf', 'sl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf', 'sr_Cyrl', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf', 'sr_Latn', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf', 'sv', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ua.xlf', 'ua', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf', 'uk', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf', 'zh_CN', 'validators');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ar.xlf', 'ar', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.bg.xlf', 'bg', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ca.xlf', 'ca', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.cs.xlf', 'cs', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.da.xlf', 'da', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.de.xlf', 'de', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.el.xlf', 'el', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.en.xlf', 'en', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.es.xlf', 'es', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fa.xlf', 'fa', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.fr.xlf', 'fr', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.gl.xlf', 'gl', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hr.xlf', 'hr', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.hu.xlf', 'hu', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.id.xlf', 'id', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.it.xlf', 'it', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ja.xlf', 'ja', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.lb.xlf', 'lb', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.nl.xlf', 'nl', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.no.xlf', 'no', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pl.xlf', 'pl', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_BR.xlf', 'pt_BR', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.pt_PT.xlf', 'pt_PT', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ro.xlf', 'ro', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ru.xlf', 'ru', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sk.xlf', 'sk', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sl.xlf', 'sl', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Cyrl.xlf', 'sr_Cyrl', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sr_Latn.xlf', 'sr_Latn', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.sv.xlf', 'sv', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.tr.xlf', 'tr', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.ua.xlf', 'ua', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.vi.xlf', 'vi', 'security');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Exception/../../Resources/translations/security.zh_CN.xlf', 'zh_CN', 'security');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.bg.xliff', 'bg', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ca.xliff', 'ca', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.cs.xliff', 'cs', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.de.xliff', 'de', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.en.xliff', 'en', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.es.xliff', 'es', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.eu.xliff', 'eu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.fa.xliff', 'fa', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.fr.xliff', 'fr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.hr.xliff', 'hr', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.hu.xliff', 'hu', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.it.xliff', 'it', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ja.xliff', 'ja', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.lb.xliff', 'lb', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.nl.xliff', 'nl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pl.xliff', 'pl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pt.xliff', 'pt', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.pt_BR.xliff', 'pt_BR', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ro.xliff', 'ro', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.ru.xliff', 'ru', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.sk.xliff', 'sk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.sl.xliff', 'sl', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.uk.xliff', 'uk', 'SonataAdminBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/translations/SonataAdminBundle.zh_CN.xliff', 'zh_CN', 'SonataAdminBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.bg.yml', 'bg', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ca.yml', 'ca', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.cs.yml', 'cs', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.da.yml', 'da', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.de.yml', 'de', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.en.yml', 'en', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.es.yml', 'es', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.et.yml', 'et', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fa.yml', 'fa', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fi.yml', 'fi', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.fr.yml', 'fr', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hr.yml', 'hr', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.hu.yml', 'hu', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.it.yml', 'it', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ja.yml', 'ja', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lb.yml', 'lb', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lt.yml', 'lt', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.lv.yml', 'lv', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.nl.yml', 'nl', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pl.yml', 'pl', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_BR.yml', 'pt_BR', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.pt_PT.yml', 'pt_PT', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ro.yml', 'ro', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.ru.yml', 'ru', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sk.yml', 'sk', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sl.yml', 'sl', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sr_Latn.yml', 'sr_Latn', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.sv.yml', 'sv', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.tr.yml', 'tr', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.uk.yml', 'uk', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/FOSUserBundle.zh_CN.yml', 'zh_CN', 'FOSUserBundle');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.bg.yml', 'bg', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.cs.yml', 'cs', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.da.yml', 'da', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.de.yml', 'de', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.en.yml', 'en', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.es.yml', 'es', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fa.yml', 'fa', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fi.yml', 'fi', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.fr.yml', 'fr', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hr.yml', 'hr', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.hu.yml', 'hu', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.it.yml', 'it', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ja.yml', 'ja', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lt.yml', 'lt', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.lv.yml', 'lv', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.nl.yml', 'nl', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pl.yml', 'pl', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt.yml', 'pt', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.pt_BR.yml', 'pt_BR', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.ru.yml', 'ru', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sk.yml', 'sk', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sl.yml', 'sl', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sr_Latn.yml', 'sr_Latn', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.sv.yml', 'sv', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.tr.yml', 'tr', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.uk.yml', 'uk', 'validators');
        $instance->addResource('yml', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/translations/validators.zh_CN.yml', 'zh_CN', 'validators');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.bg.xliff', 'bg', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.ca.xliff', 'ca', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.cs.xliff', 'cs', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.de.xliff', 'de', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.en.xliff', 'en', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.es.xliff', 'es', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.fa.xliff', 'fa', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.fr.xliff', 'fr', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.it.xliff', 'it', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.nl.xliff', 'nl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.pl.xliff', 'pl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.pt.xliff', 'pt', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.ru.xliff', 'ru', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.sk.xliff', 'sk', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.sl.xliff', 'sl', 'SonataUserBundle');
        $instance->addResource('xliff', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/translations/SonataUserBundle.zh_TW.xliff', 'zh_TW', 'SonataUserBundle');
        $instance->addResource('xlf', '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/src/FT/DefaultBundle/Resources/translations/messages.fr.xlf', 'fr', 'messages');
        return $instance;
    }
    protected function getTwigService()
    {
        $a = $this->get('security.context');
        $this->services['twig'] = $instance = new \Twig_Environment($this->get('twig.loader'), array('debug' => false, 'strict_variables' => false, 'exception_controller' => 'twig.controller.exception:showAction', 'autoescape_service' => NULL, 'autoescape_service_method' => NULL, 'cache' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/twig', 'charset' => 'UTF-8', 'paths' => array()));
        $instance->addExtension(new \Symfony\Bundle\SecurityBundle\Twig\Extension\LogoutUrlExtension($this->get('templating.helper.logout_url')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension($a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($this->get('translator.default')));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\AssetsExtension($this));
        $instance->addExtension(new \Symfony\Bundle\TwigBundle\Extension\ActionsExtension($this));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension(NULL, '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app', 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($this->get('router')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension($this->get('fragment.handler')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(new \Symfony\Bridge\Twig\Form\TwigRenderer(new \Symfony\Bridge\Twig\Form\TwigRendererEngine(array(0 => 'form_div_layout.html.twig', 1 => 'SonataUserBundle:Form:form_admin_fields.html.twig')), $this->get('form.csrf_provider', ContainerInterface::NULL_ON_INVALID_REFERENCE))));
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension($this->get('assetic.asset_factory'), $this->get('templating.name_parser'), true, array(), array(), $this->get('assetic.value_supplier.default', ContainerInterface::NULL_ON_INVALID_REFERENCE)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \JMS\SecurityExtraBundle\Twig\SecurityExtension($a));
        $instance->addExtension(new \Sonata\BlockBundle\Twig\Extension\BlockExtension($this->get('sonata.block.templating.helper')));
        $instance->addExtension($this->get('sonata.admin.twig.extension'));
        $instance->addExtension($this->get('sonata.admin.twig.extension.text'));
        $instance->addExtension(new \Knp\Menu\Twig\MenuExtension(new \Knp\Menu\Twig\Helper($this->get('knp_menu.renderer_provider'), $this->get('knp_menu.menu_provider'))));
        $instance->addGlobal('app', $this->get('templating.globals'));
        $instance->addGlobal('sonata_block', $this->get('sonata.block.twig.global'));
        $instance->addGlobal('sonata_user', $this->get('sonata.user.twig.global'));
        return $instance;
    }
    protected function getTwig_Controller_ExceptionService()
    {
        return $this->services['twig.controller.exception'] = new \Symfony\Bundle\TwigBundle\Controller\ExceptionController($this->get('twig'), false);
    }
    protected function getTwig_ExceptionListenerService()
    {
        return $this->services['twig.exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ExceptionListener('twig.controller.exception:showAction', $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader($this->get('templating.locator'), $this->get('templating.name_parser'));
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views', 'Framework');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views', 'Security');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views', 'Twig');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/swiftmailer-bundle/Symfony/Bundle/SwiftmailerBundle/Resources/views', 'Swiftmailer');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/doctrine/doctrine-bundle/Doctrine/Bundle/DoctrineBundle/Resources/views', 'Doctrine');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/block-bundle/Sonata/BlockBundle/Resources/views', 'SonataBlock');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/admin-bundle/Sonata/AdminBundle/Resources/views', 'SonataAdmin');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/doctrine-orm-admin-bundle/Sonata/DoctrineORMAdminBundle/Resources/views', 'SonataDoctrineORMAdmin');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views', 'FOSUser');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sonata-project/user-bundle/Sonata/UserBundle/Resources/views', 'SonataUser');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/src/Application/Sonata/UserBundle/Resources/views', 'ApplicationSonataUser');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/src/FT/DefaultBundle/Resources/views', 'FTDefault');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views', 'WebProfiler');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views', 'SensioDistribution');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/Resources/views');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form');
        $instance->addPath('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views');
        return $instance;
    }
    protected function getTwig_Translation_ExtractorService()
    {
        return $this->services['twig.translation.extractor'] = new \Symfony\Bridge\Twig\Translation\TwigExtractor($this->get('twig'));
    }
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('123j123l1k2j3l12k3j12lk3 l');
    }
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator($this->get('validator.mapping.class_metadata_factory'), $this->get('validator.validator_factory'), $this->get('translator.default'), 'validators', array(0 => $this->get('doctrine.orm.validator_initializer'), 1 => new \FOS\UserBundle\Validator\Initializer($this->get('fos_user.user_manager'))));
    }
    protected function getWebProfiler_Controller_ExceptionService()
    {
        return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), false);
    }
    protected function getWebProfiler_Controller_ProfilerService()
    {
        return $this->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController($this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), array('data_collector.config' => array(0 => 'config', 1 => '@WebProfiler/Collector/config.html.twig'), 'data_collector.request' => array(0 => 'request', 1 => '@WebProfiler/Collector/request.html.twig'), 'data_collector.exception' => array(0 => 'exception', 1 => '@WebProfiler/Collector/exception.html.twig'), 'data_collector.events' => array(0 => 'events', 1 => '@WebProfiler/Collector/events.html.twig'), 'data_collector.logger' => array(0 => 'logger', 1 => '@WebProfiler/Collector/logger.html.twig'), 'data_collector.time' => array(0 => 'time', 1 => '@WebProfiler/Collector/time.html.twig'), 'data_collector.memory' => array(0 => 'memory', 1 => '@WebProfiler/Collector/memory.html.twig'), 'data_collector.router' => array(0 => 'router', 1 => '@WebProfiler/Collector/router.html.twig'), 'data_collector.security' => array(0 => 'security', 1 => 'SecurityBundle:Collector:security'), 'swiftmailer.data_collector' => array(0 => 'swiftmailer', 1 => '@Swiftmailer/Collector/swiftmailer.html.twig'), 'data_collector.doctrine' => array(0 => 'db', 1 => 'DoctrineBundle:Collector:db'), 'sonata.block.data_collector' => array(0 => 'block', 1 => 'SonataBlockBundle:Profiler:block.html.twig')), 'bottom');
    }
    protected function getWebProfiler_Controller_RouterService()
    {
        return $this->services['web_profiler.controller.router'] = new \Symfony\Bundle\WebProfilerBundle\Controller\RouterController($this->get('profiler', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('twig'), $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener($this->get('twig'), false, 2, 'bottom');
    }
    protected function synchronizeRequestService()
    {
        if ($this->initialized('locale_listener')) {
            $this->get('locale_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('fragment.handler')) {
            $this->get('fragment.handler')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
        if ($this->initialized('router_listener')) {
            $this->get('router_listener')->setRequest($this->get('request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        }
    }
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory($this->get('kernel'), $this, $this->getParameterBag(), '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/../web', false);
        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());
        return $instance;
    }
    protected function getAssetic_CacheService()
    {
        return $this->services['assetic.cache'] = new \Assetic\Cache\FilesystemCache('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/assetic/assets');
    }
    protected function getAssetic_ValueSupplier_DefaultService()
    {
        return $this->services['assetic.value_supplier.default'] = new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this);
    }
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($this->get('kernel'));
    }
    protected function getFosUser_EntityManagerService()
    {
        return $this->services['fos_user.entity_manager'] = $this->get('doctrine')->getManager(NULL);
    }
    protected function getJmsDiExtra_ControllerResolverService()
    {
        return $this->services['jms_di_extra.controller_resolver'] = new \JMS\DiExtraBundle\HttpKernel\ControllerResolver($this, $this->get('controller_name_converter'), $this->get('monolog.logger.request', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }
    protected function getSecurity_AccessListenerService()
    {
        return $this->services['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener($this->get('security.context'), $this->get('security.access.decision_manager'), $this->get('security.access_map'), $this->get('security.authentication.manager'));
    }
    protected function getSecurity_AccessMapService()
    {
        $this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_wdt'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/_profiler'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/logout$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin/login-check$'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/register'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/resetting'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/admin'), array(0 => 'ROLE_ADMIN', 1 => 'ROLE_SONATA_ADMIN'), NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/.*'), array(0 => 'IS_AUTHENTICATED_ANONYMOUSLY'), NULL);
        return $instance;
    }
    protected function getSecurity_Authentication_ManagerService()
    {
        $a = $this->get('fos_user.user_manager');
        $b = $this->get('security.user_checker');
        $c = $this->get('security.encoder_factory');
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(array(0 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'admin', $c, true), 1 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5363efc64fba3'), 2 => new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, $b, 'main', $c, true), 3 => new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider('5363efc64fba3')), true);
        $instance->setEventDispatcher($this->get('event_dispatcher'));
        return $instance;
    }
    protected function getSecurity_Authentication_SessionStrategyService()
    {
        return $this->services['security.authentication.session_strategy'] = new \Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy('migrate');
    }
    protected function getSecurity_ChannelListenerService()
    {
        return $this->services['security.channel_listener'] = new \Symfony\Component\Security\Http\Firewall\ChannelListener($this->get('security.access_map'), new \Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint(80, 443), $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_ContextListener_0Service()
    {
        return $this->services['security.context_listener.0'] = new \Symfony\Component\Security\Http\Firewall\ContextListener($this->get('security.context'), array(0 => $this->get('fos_user.user_manager')), 'user', $this->get('monolog.logger.security', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('event_dispatcher', ContainerInterface::NULL_ON_INVALID_REFERENCE));
    }
    protected function getSecurity_Expressions_HandlerService()
    {
        return $this->services['security.expressions.handler'] = new \JMS\SecurityExtraBundle\Security\Authorization\Expression\ContainerAwareExpressionHandler($this);
    }
    protected function getSecurity_Extra_MetadataFactoryService()
    {
        $this->services['security.extra.metadata_factory'] = $instance = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver($this, 'security.extra.metadata_driver'), new \Metadata\Cache\FileCache('/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_security', false));
        $instance->setIncludeInterfaces(true);
        return $instance;
    }
    protected function getSecurity_HttpUtilsService()
    {
        $a = $this->get('router', ContainerInterface::NULL_ON_INVALID_REFERENCE);
        return $this->services['security.http_utils'] = new \Symfony\Component\Security\Http\HttpUtils($a, $a);
    }
    protected function getSecurity_Logout_Handler_SessionService()
    {
        return $this->services['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler();
    }
    protected function getSecurity_UserCheckerService()
    {
        return $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker();
    }
    protected function getSonata_Block_ManagerService()
    {
        $this->services['sonata.block.manager'] = $instance = new \Sonata\BlockBundle\Block\BlockServiceManager($this, false, $this->get('logger', ContainerInterface::NULL_ON_INVALID_REFERENCE));
        $instance->add('sonata.block.service.empty', 'sonata.block.service.empty');
        $instance->add('sonata.block.service.text', 'sonata.block.service.text');
        $instance->add('sonata.block.service.rss', 'sonata.block.service.rss');
        $instance->add('sonata.admin.block.admin_list', 'sonata.admin.block.admin_list');
        $instance->add('sonata.admin.block.search_result', 'sonata.admin.block.search_result');
        $instance->add('sonata.admin_doctrine_orm.block.audit', 'sonata.admin_doctrine_orm.block.audit');
        $instance->add('sonata.user.block.menu', 'sonata.user.block.menu');
        $instance->add('sonata.user.block.account', 'sonata.user.block.account');
        return $instance;
    }
    protected function getSonata_Block_Templating_HelperService()
    {
        return $this->services['sonata.block.templating.helper'] = new \Sonata\BlockBundle\Templating\Helper\BlockHelper($this->get('sonata.block.manager'), array('by_type' => array('sonata.admin.block.admin_list' => 'sonata.cache.noop', 'sonata.admin.block.search_result' => 'sonata.cache.noop', 'sonata.user.block.menu' => 'sonata.cache.noop', 'sonata.block.service.text' => 'sonata.cache.noop', 'sonata.block.service.action' => 'sonata.cache.noop', 'sonata.block.service.rss' => 'sonata.cache.noop')), $this->get('sonata.block.renderer.default'), $this->get('sonata.block.context_manager.default'), $this->get('sonata.cache.manager', ContainerInterface::NULL_ON_INVALID_REFERENCE), $this->get('sonata.block.cache.handler.default', ContainerInterface::NULL_ON_INVALID_REFERENCE), NULL);
    }
    protected function getSwiftmailer_Mailer_Default_Transport_EventdispatcherService()
    {
        return $this->services['swiftmailer.mailer.default.transport.eventdispatcher'] = new \Swift_Events_SimpleEventDispatcher();
    }
    protected function getTemplating_LocatorService()
    {
        return $this->services['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator($this->get('file_locator'), '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev');
    }
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['validator.mapping.class_metadata_factory'] = new \Symfony\Component\Validator\Mapping\ClassMetadataFactory(new \Symfony\Component\Validator\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Validator\Mapping\Loader\AnnotationLoader($this->get('annotation_reader')), 1 => new \Symfony\Component\Validator\Mapping\Loader\StaticMethodLoader(), 2 => new \Symfony\Component\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml', 1 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml', 2 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml')), 3 => new \Symfony\Component\Validator\Mapping\Loader\YamlFilesLoader(array()))), NULL);
    }
    protected function getValidator_ValidatorFactoryService()
    {
        return $this->services['validator.validator_factory'] = new \Symfony\Bundle\FrameworkBundle\Validator\ConstraintValidatorFactory($this, array('security.validator.user_password' => 'security.validator.user_password', 'doctrine.orm.validator.unique' => 'doctrine.orm.validator.unique', 'sonata.admin.validator.inline' => 'sonata.admin.validator.inline'));
    }
    public function getParameter($name)
    {
        $name = strtolower($name);
        if (!(isset($this->parameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        return $this->parameters[$name];
    }
    public function hasParameter($name)
    {
        $name = strtolower($name);
        return isset($this->parameters[$name]) || array_key_exists($name, $this->parameters);
    }
    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }
    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $this->parameterBag = new FrozenParameterBag($this->parameters);
        }
        return $this->parameterBag;
    }
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app',
            'kernel.environment' => 'dev',
            'kernel.debug' => false,
            'kernel.name' => 'ap_',
            'kernel.cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev',
            'kernel.logs_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/logs',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'JMSAopBundle' => 'JMS\\AopBundle\\JMSAopBundle',
                'JMSDiExtraBundle' => 'JMS\\DiExtraBundle\\JMSDiExtraBundle',
                'JMSSecurityExtraBundle' => 'JMS\\SecurityExtraBundle\\JMSSecurityExtraBundle',
                'SonataCacheBundle' => 'Sonata\\CacheBundle\\SonataCacheBundle',
                'SonataBlockBundle' => 'Sonata\\BlockBundle\\SonataBlockBundle',
                'SonataAdminBundle' => 'Sonata\\AdminBundle\\SonataAdminBundle',
                'KnpMenuBundle' => 'Knp\\Bundle\\MenuBundle\\KnpMenuBundle',
                'SonataDoctrineORMAdminBundle' => 'Sonata\\DoctrineORMAdminBundle\\SonataDoctrineORMAdminBundle',
                'FOSUserBundle' => 'FOS\\UserBundle\\FOSUserBundle',
                'SonataUserBundle' => 'Sonata\\UserBundle\\SonataUserBundle',
                'SonataEasyExtendsBundle' => 'Sonata\\EasyExtendsBundle\\SonataEasyExtendsBundle',
                'SonatajQueryBundle' => 'Sonata\\jQueryBundle\\SonatajQueryBundle',
                'ApplicationSonataUserBundle' => 'Application\\Sonata\\UserBundle\\ApplicationSonataUserBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'FTDefaultBundle' => 'FT\\DefaultBundle\\FTDefaultBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevProjectContainer',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'sc_symfony',
            'database_user' => 'Demo',
            'database_password' => 'demo',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'locale' => 'fr',
            'secret' => '123j123l1k2j3l12k3j12lk3 l',
            'database_path' => NULL,
            'controller_resolver.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerResolver',
            'controller_name_converter.class' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser',
            'response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ResponseListener',
            'streamed_response_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\StreamedResponseListener',
            'locale_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\LocaleListener',
            'event_dispatcher.class' => 'Symfony\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
            'http_kernel.class' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\ContainerAwareHttpKernel',
            'filesystem.class' => 'Symfony\\Component\\Filesystem\\Filesystem',
            'cache_warmer.class' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate',
            'cache_clearer.class' => 'Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer',
            'file_locator.class' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
            'uri_signer.class' => 'Symfony\\Component\\HttpKernel\\UriSigner',
            'fragment.handler.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\FragmentHandler',
            'fragment.renderer.inline.class' => 'Symfony\\Component\\HttpKernel\\Fragment\\InlineFragmentRenderer',
            'fragment.renderer.hinclude.class' => 'Symfony\\Bundle\\FrameworkBundle\\Fragment\\ContainerAwareHIncludeFragmentRenderer',
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator',
            'translator.identity.class' => 'Symfony\\Component\\Translation\\IdentityTranslator',
            'translator.selector.class' => 'Symfony\\Component\\Translation\\MessageSelector',
            'translation.loader.php.class' => 'Symfony\\Component\\Translation\\Loader\\PhpFileLoader',
            'translation.loader.yml.class' => 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader',
            'translation.loader.xliff.class' => 'Symfony\\Component\\Translation\\Loader\\XliffFileLoader',
            'translation.loader.po.class' => 'Symfony\\Component\\Translation\\Loader\\PoFileLoader',
            'translation.loader.mo.class' => 'Symfony\\Component\\Translation\\Loader\\MoFileLoader',
            'translation.loader.qt.class' => 'Symfony\\Component\\Translation\\Loader\\QtFileLoader',
            'translation.loader.csv.class' => 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader',
            'translation.loader.res.class' => 'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader',
            'translation.loader.dat.class' => 'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader',
            'translation.loader.ini.class' => 'Symfony\\Component\\Translation\\Loader\\IniFileLoader',
            'translation.dumper.php.class' => 'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper',
            'translation.dumper.xliff.class' => 'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper',
            'translation.dumper.po.class' => 'Symfony\\Component\\Translation\\Dumper\\PoFileDumper',
            'translation.dumper.mo.class' => 'Symfony\\Component\\Translation\\Dumper\\MoFileDumper',
            'translation.dumper.yml.class' => 'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper',
            'translation.dumper.qt.class' => 'Symfony\\Component\\Translation\\Dumper\\QtFileDumper',
            'translation.dumper.csv.class' => 'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper',
            'translation.dumper.ini.class' => 'Symfony\\Component\\Translation\\Dumper\\IniFileDumper',
            'translation.dumper.res.class' => 'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper',
            'translation.extractor.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\PhpExtractor',
            'translation.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Translation\\TranslationLoader',
            'translation.extractor.class' => 'Symfony\\Component\\Translation\\Extractor\\ChainExtractor',
            'translation.writer.class' => 'Symfony\\Component\\Translation\\Writer\\TranslationWriter',
            'debug.errors_logger_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ErrorsLoggerListener',
            'kernel.secret' => '123j123l1k2j3l12k3j12lk3 l',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(
            ),
            'kernel.trusted_proxies' => array(
            ),
            'kernel.default_locale' => 'fr',
            'session.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Session',
            'session.flashbag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag',
            'session.attribute_bag.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag',
            'session.storage.native.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage',
            'session.storage.php_bridge.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage',
            'session.storage.mock_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage',
            'session.handler.native_file.class' => 'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler',
            'session_listener.class' => 'Symfony\\Bundle\\FrameworkBundle\\EventListener\\SessionListener',
            'session.storage.options' => array(
            ),
            'session.save_path' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/sessions',
            'form.resolved_type_factory.class' => 'Symfony\\Component\\Form\\ResolvedFormTypeFactory',
            'form.registry.class' => 'Symfony\\Component\\Form\\FormRegistry',
            'form.factory.class' => 'Symfony\\Component\\Form\\FormFactory',
            'form.extension.class' => 'Symfony\\Component\\Form\\Extension\\DependencyInjection\\DependencyInjectionExtension',
            'form.type_guesser.validator.class' => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser',
            'property_accessor.class' => 'Symfony\\Component\\PropertyAccess\\PropertyAccessor',
            'form.csrf_provider.class' => 'Symfony\\Component\\Form\\Extension\\Csrf\\CsrfProvider\\SessionCsrfProvider',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'templating.engine.delegating.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\DelegatingEngine',
            'templating.name_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser',
            'templating.filename_parser.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateFilenameParser',
            'templating.cache_warmer.template_paths.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplatePathsCacheWarmer',
            'templating.locator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\TemplateLocator',
            'templating.loader.filesystem.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Component\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Component\\Templating\\Loader\\ChainLoader',
            'templating.finder.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\TemplateFinder',
            'templating.engine.php.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\PhpEngine',
            'templating.helper.slots.class' => 'Symfony\\Component\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Component\\Templating\\Helper\\CoreAssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\RequestHelper',
            'templating.helper.session.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\SessionHelper',
            'templating.helper.code.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\CodeHelper',
            'templating.helper.translator.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\TranslatorHelper',
            'templating.helper.form.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper\\FormHelper',
            'templating.form.engine.class' => 'Symfony\\Component\\Form\\Extension\\Templating\\TemplatingRendererEngine',
            'templating.form.renderer.class' => 'Symfony\\Component\\Form\\FormRenderer',
            'templating.globals.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables',
            'templating.asset.path_package.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PathPackage',
            'templating.asset.url_package.class' => 'Symfony\\Component\\Templating\\Asset\\UrlPackage',
            'templating.asset.package_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Templating\\Asset\\PackageFactory',
            'templating.helper.code.file_link_format' => NULL,
            'templating.helper.form.resources' => array(
                0 => 'FrameworkBundle:Form',
            ),
            'templating.loader.cache.path' => NULL,
            'templating.engines' => array(
                0 => 'twig',
            ),
            'validator.class' => 'Symfony\\Component\\Validator\\Validator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Component\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.cache.apc.class' => 'Symfony\\Component\\Validator\\Mapping\\Cache\\ApcCache',
            'validator.mapping.cache.prefix' => '',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.validator_factory.class' => 'Symfony\\Bundle\\FrameworkBundle\\Validator\\ConstraintValidatorFactory',
            'validator.mapping.loader.xml_files_loader.mapping_files' => array(
                0 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml',
                1 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation.xml',
                2 => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/config/validation/orm.xml',
            ),
            'validator.mapping.loader.yaml_files_loader.mapping_files' => array(
            ),
            'validator.translation_domain' => 'validators',
            'profiler.class' => 'Symfony\\Component\\HttpKernel\\Profiler\\Profiler',
            'profiler_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ProfilerListener',
            'data_collector.config.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector',
            'data_collector.request.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\RequestDataCollector',
            'data_collector.exception.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\ExceptionDataCollector',
            'data_collector.events.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\EventDataCollector',
            'data_collector.logger.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\LoggerDataCollector',
            'data_collector.time.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\TimeDataCollector',
            'data_collector.memory.class' => 'Symfony\\Component\\HttpKernel\\DataCollector\\MemoryDataCollector',
            'data_collector.router.class' => 'Symfony\\Bundle\\FrameworkBundle\\DataCollector\\RouterDataCollector',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'profiler.storage.dsn' => 'file:/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/profiler',
            'profiler.storage.username' => '',
            'profiler.storage.password' => '',
            'profiler.storage.lifetime' => 86400,
            'router.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\Router',
            'router.request_context.class' => 'Symfony\\Component\\Routing\\RequestContext',
            'routing.loader.class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\DelegatingLoader',
            'routing.resolver.class' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
            'routing.loader.xml.class' => 'Symfony\\Component\\Routing\\Loader\\XmlFileLoader',
            'routing.loader.yml.class' => 'Symfony\\Component\\Routing\\Loader\\YamlFileLoader',
            'routing.loader.php.class' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.cache_warmer.class' => 'Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\RouterCacheWarmer',
            'router.options.matcher.cache_class' => 'appDevUrlMatcher',
            'router.options.generator.cache_class' => 'appDevUrlGenerator',
            'router_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\RouterListener',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/assetic/routing.yml',
            'router.cache_class_prefix' => 'appDev',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'annotations.reader.class' => 'Doctrine\\Common\\Annotations\\AnnotationReader',
            'annotations.cached_reader.class' => 'Doctrine\\Common\\Annotations\\CachedReader',
            'annotations.file_cache_reader.class' => 'Doctrine\\Common\\Annotations\\FileCacheReader',
            'security.context.class' => 'Symfony\\Component\\Security\\Core\\SecurityContext',
            'security.user_checker.class' => 'Symfony\\Component\\Security\\Core\\User\\UserChecker',
            'security.encoder_factory.generic.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\EncoderFactory',
            'security.encoder.digest.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\MessageDigestPasswordEncoder',
            'security.encoder.plain.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\PlaintextPasswordEncoder',
            'security.encoder.pbkdf2.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\Pbkdf2PasswordEncoder',
            'security.encoder.bcrypt.class' => 'Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder',
            'security.user.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\User\\InMemoryUserProvider',
            'security.user.provider.in_memory.user.class' => 'Symfony\\Component\\Security\\Core\\User\\User',
            'security.user.provider.chain.class' => 'Symfony\\Component\\Security\\Core\\User\\ChainUserProvider',
            'security.authentication.trust_resolver.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolver',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.authentication.manager.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationProviderManager',
            'security.authentication.session_strategy.class' => 'Symfony\\Component\\Security\\Http\\Session\\SessionAuthenticationStrategy',
            'security.access.decision_manager.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecisionManager',
            'security.access.simple_role_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleVoter',
            'security.access.authenticated_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\AuthenticatedVoter',
            'security.access.role_hierarchy_voter.class' => 'Symfony\\Component\\Security\\Core\\Authorization\\Voter\\RoleHierarchyVoter',
            'security.firewall.class' => 'Symfony\\Component\\Security\\Http\\Firewall',
            'security.firewall.map.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallMap',
            'security.firewall.context.class' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallContext',
            'security.matcher.class' => 'Symfony\\Component\\HttpFoundation\\RequestMatcher',
            'security.role_hierarchy.class' => 'Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy',
            'security.http_utils.class' => 'Symfony\\Component\\Security\\Http\\HttpUtils',
            'security.validator.user_password.class' => 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator',
            'security.authentication.retry_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\RetryAuthenticationEntryPoint',
            'security.channel_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ChannelListener',
            'security.authentication.form_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\FormAuthenticationEntryPoint',
            'security.authentication.listener.form.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\UsernamePasswordFormAuthenticationListener',
            'security.authentication.listener.basic.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\BasicAuthenticationListener',
            'security.authentication.basic_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\BasicAuthenticationEntryPoint',
            'security.authentication.listener.digest.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\DigestAuthenticationListener',
            'security.authentication.digest_entry_point.class' => 'Symfony\\Component\\Security\\Http\\EntryPoint\\DigestAuthenticationEntryPoint',
            'security.authentication.listener.x509.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\X509AuthenticationListener',
            'security.authentication.listener.anonymous.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AnonymousAuthenticationListener',
            'security.authentication.switchuser_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\SwitchUserListener',
            'security.logout_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\LogoutListener',
            'security.logout.handler.session.class' => 'Symfony\\Component\\Security\\Http\\Logout\\SessionLogoutHandler',
            'security.logout.handler.cookie_clearing.class' => 'Symfony\\Component\\Security\\Http\\Logout\\CookieClearingLogoutHandler',
            'security.logout.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler',
            'security.access_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\AccessListener',
            'security.access_map.class' => 'Symfony\\Component\\Security\\Http\\AccessMap',
            'security.exception_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ExceptionListener',
            'security.context_listener.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\ContextListener',
            'security.authentication.provider.dao.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\DaoAuthenticationProvider',
            'security.authentication.provider.pre_authenticated.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\PreAuthenticatedAuthenticationProvider',
            'security.authentication.provider.anonymous.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AnonymousAuthenticationProvider',
            'security.authentication.success_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationSuccessHandler',
            'security.authentication.failure_handler.class' => 'Symfony\\Component\\Security\\Http\\Authentication\\DefaultAuthenticationFailureHandler',
            'security.authentication.provider.rememberme.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Provider\\RememberMeAuthenticationProvider',
            'security.authentication.listener.rememberme.class' => 'Symfony\\Component\\Security\\Http\\Firewall\\RememberMeListener',
            'security.rememberme.token.provider.in_memory.class' => 'Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider',
            'security.authentication.rememberme.services.persistent.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\PersistentTokenBasedRememberMeServices',
            'security.authentication.rememberme.services.simplehash.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices',
            'security.rememberme.response_listener.class' => 'Symfony\\Component\\Security\\Http\\RememberMe\\ResponseListener',
            'templating.helper.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\LogoutUrlHelper',
            'templating.helper.security.class' => 'Symfony\\Bundle\\SecurityBundle\\Templating\\Helper\\SecurityHelper',
            'twig.extension.logout_url.class' => 'Symfony\\Bundle\\SecurityBundle\\Twig\\Extension\\LogoutUrlExtension',
            'twig.extension.security.class' => 'Symfony\\Bridge\\Twig\\Extension\\SecurityExtension',
            'data_collector.security.class' => 'Symfony\\Bundle\\SecurityBundle\\DataCollector\\SecurityDataCollector',
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'security.role_hierarchy.roles' => array(
                'ROLE_ADMIN' => array(
                    0 => 'ROLE_USER',
                    1 => 'ROLE_SONATA_ADMIN',
                ),
                'ROLE_SUPER_ADMIN' => array(
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ),
                'SONATA' => array(
                    0 => 'ROLE_SONATA_PAGE_ADMIN_PAGE_EDIT',
                ),
            ),
            'twig.class' => 'Twig_Environment',
            'twig.loader.filesystem.class' => 'Symfony\\Bundle\\TwigBundle\\Loader\\FilesystemLoader',
            'twig.loader.chain.class' => 'Twig_Loader_Chain',
            'templating.engine.twig.class' => 'Symfony\\Bundle\\TwigBundle\\TwigEngine',
            'twig.cache_warmer.class' => 'Symfony\\Bundle\\TwigBundle\\CacheWarmer\\TemplateCacheCacheWarmer',
            'twig.extension.trans.class' => 'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension',
            'twig.extension.assets.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\AssetsExtension',
            'twig.extension.actions.class' => 'Symfony\\Bundle\\TwigBundle\\Extension\\ActionsExtension',
            'twig.extension.code.class' => 'Symfony\\Bridge\\Twig\\Extension\\CodeExtension',
            'twig.extension.routing.class' => 'Symfony\\Bridge\\Twig\\Extension\\RoutingExtension',
            'twig.extension.yaml.class' => 'Symfony\\Bridge\\Twig\\Extension\\YamlExtension',
            'twig.extension.form.class' => 'Symfony\\Bridge\\Twig\\Extension\\FormExtension',
            'twig.extension.httpkernel.class' => 'Symfony\\Bridge\\Twig\\Extension\\HttpKernelExtension',
            'twig.form.engine.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRendererEngine',
            'twig.form.renderer.class' => 'Symfony\\Bridge\\Twig\\Form\\TwigRenderer',
            'twig.translation.extractor.class' => 'Symfony\\Bridge\\Twig\\Translation\\TwigExtractor',
            'twig.exception_listener.class' => 'Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener',
            'twig.controller.exception.class' => 'Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController',
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
                1 => 'SonataUserBundle:Form:form_admin_fields.html.twig',
            ),
            'twig.options' => array(
                'debug' => false,
                'strict_variables' => false,
                'exception_controller' => 'twig.controller.exception:showAction',
                'autoescape_service' => NULL,
                'autoescape_service_method' => NULL,
                'cache' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/twig',
                'charset' => 'UTF-8',
                'paths' => array(
                ),
            ),
            'monolog.logger.class' => 'Symfony\\Bridge\\Monolog\\Logger',
            'monolog.gelf.publisher.class' => 'Gelf\\MessagePublisher',
            'monolog.handler.stream.class' => 'Monolog\\Handler\\StreamHandler',
            'monolog.handler.console.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ConsoleHandler',
            'monolog.handler.group.class' => 'Monolog\\Handler\\GroupHandler',
            'monolog.handler.buffer.class' => 'Monolog\\Handler\\BufferHandler',
            'monolog.handler.rotating_file.class' => 'Monolog\\Handler\\RotatingFileHandler',
            'monolog.handler.syslog.class' => 'Monolog\\Handler\\SyslogHandler',
            'monolog.handler.null.class' => 'Monolog\\Handler\\NullHandler',
            'monolog.handler.test.class' => 'Monolog\\Handler\\TestHandler',
            'monolog.handler.gelf.class' => 'Monolog\\Handler\\GelfHandler',
            'monolog.handler.firephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\FirePHPHandler',
            'monolog.handler.chromephp.class' => 'Symfony\\Bridge\\Monolog\\Handler\\ChromePhpHandler',
            'monolog.handler.debug.class' => 'Symfony\\Bridge\\Monolog\\Handler\\DebugHandler',
            'monolog.handler.swift_mailer.class' => 'Symfony\\Bridge\\Monolog\\Handler\\SwiftMailerHandler',
            'monolog.handler.native_mailer.class' => 'Monolog\\Handler\\NativeMailerHandler',
            'monolog.handler.socket.class' => 'Monolog\\Handler\\SocketHandler',
            'monolog.handler.pushover.class' => 'Monolog\\Handler\\PushoverHandler',
            'monolog.handler.raven.class' => 'Monolog\\Handler\\RavenHandler',
            'monolog.handler.newrelic.class' => 'Monolog\\Handler\\NewRelicHandler',
            'monolog.handler.hipchat.class' => 'Monolog\\Handler\\HipChatHandler',
            'monolog.handler.cube.class' => 'Monolog\\Handler\\CubeHandler',
            'monolog.handler.amqp.class' => 'Monolog\\Handler\\AmqpHandler',
            'monolog.handler.error_log.class' => 'Monolog\\Handler\\ErrorLogHandler',
            'monolog.activation_strategy.not_found.class' => 'Symfony\\Bundle\\MonologBundle\\NotFoundActivationStrategy',
            'monolog.handler.fingers_crossed.class' => 'Monolog\\Handler\\FingersCrossedHandler',
            'monolog.handler.fingers_crossed.error_level_activation_strategy.class' => 'Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy',
            'monolog.handlers_to_channels' => array(
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.spool.default.memory.path' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/swiftmailer/spool/default',
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => array(
            ),
            'assetic.cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/assetic',
            'assetic.bundles' => array(
            ),
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => false,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.read_from' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/../web',
            'assetic.write_to' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/../web',
            'assetic.variables' => array(
            ),
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/local/bin/node',
            'assetic.ruby.bin' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/ruby/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.filter.cssrewrite.class' => 'Assetic\\Filter\\CssRewriteFilter',
            'assetic.twig_extension.functions' => array(
            ),
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(
                'json' => array(
                    'class' => 'Sonata\\Doctrine\\Types\\JsonType',
                    'commented' => true,
                ),
            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\ORM\\Mapping\\Driver\\DriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'sensio_framework_extra.view.guesser.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Templating\\TemplateGuesser',
            'sensio_framework_extra.controller.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ControllerListener',
            'sensio_framework_extra.routing.loader.annot_dir.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader',
            'sensio_framework_extra.routing.loader.annot_file.class' => 'Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader',
            'sensio_framework_extra.routing.loader.annot_class.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader',
            'sensio_framework_extra.converter.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\ParamConverterListener',
            'sensio_framework_extra.converter.manager.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterManager',
            'sensio_framework_extra.converter.doctrine.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DoctrineParamConverter',
            'sensio_framework_extra.converter.datetime.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\DateTimeParamConverter',
            'sensio_framework_extra.view.listener.class' => 'Sensio\\Bundle\\FrameworkExtraBundle\\EventListener\\TemplateListener',
            'jms_aop.cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_aop',
            'jms_aop.interceptor_loader.class' => 'JMS\\AopBundle\\Aop\\InterceptorLoader',
            'jms_di_extra.metadata.driver.annotation_driver.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'jms_di_extra.metadata.driver.configured_controller_injections.class' => 'JMS\\DiExtraBundle\\Metadata\\Driver\\ConfiguredControllerInjectionsDriver',
            'jms_di_extra.metadata.driver.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'jms_di_extra.metadata.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'jms_di_extra.metadata.cache.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'jms_di_extra.metadata.converter.class' => 'JMS\\DiExtraBundle\\Metadata\\MetadataConverter',
            'jms_di_extra.controller_resolver.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerResolver',
            'jms_di_extra.controller_injectors_warmer.class' => 'JMS\\DiExtraBundle\\HttpKernel\\ControllerInjectorsWarmer',
            'jms_di_extra.all_bundles' => false,
            'jms_di_extra.bundles' => array(
            ),
            'jms_di_extra.directories' => array(
            ),
            'jms_di_extra.cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_diextra',
            'jms_di_extra.disable_grep' => false,
            'jms_di_extra.doctrine_integration' => true,
            'jms_di_extra.cache_warmer.controller_file_blacklist' => array(
            ),
            'jms_di_extra.doctrine_integration.entity_manager.file' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_diextra/doctrine/EntityManager_5363efc66375b.php',
            'jms_di_extra.doctrine_integration.entity_manager.class' => 'EntityManager5363efc66375b_546a8d27f194334ee012bfe64f629947b07e4919\\__CG__\\Doctrine\\ORM\\EntityManager',
            'security.secured_services' => array(
            ),
            'security.access.method_interceptor.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Interception\\MethodSecurityInterceptor',
            'security.access.method_access_control' => array(
            ),
            'security.access.remembering_access_decision_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RememberingAccessDecisionManager',
            'security.access.run_as_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\RunAsManager',
            'security.authentication.provider.run_as.class' => 'JMS\\SecurityExtraBundle\\Security\\Authentication\\Provider\\RunAsAuthenticationProvider',
            'security.run_as.key' => 'RunAsToken',
            'security.run_as.role_prefix' => 'ROLE_',
            'security.access.after_invocation_manager.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AfterInvocationManager',
            'security.access.after_invocation.acl_provider.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\AfterInvocation\\AclAfterInvocationProvider',
            'security.access.iddqd_voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Voter\\IddqdVoter',
            'security.extra.metadata_factory.class' => 'Metadata\\MetadataFactory',
            'security.extra.lazy_loading_driver.class' => 'Metadata\\Driver\\LazyLoadingDriver',
            'security.extra.driver_chain.class' => 'Metadata\\Driver\\DriverChain',
            'security.extra.annotation_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\AnnotationDriver',
            'security.extra.file_cache.class' => 'Metadata\\Cache\\FileCache',
            'security.access.secure_all_services' => false,
            'security.extra.cache_dir' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/cache/dev/jms_security',
            'security.acl.permission_evaluator.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\PermissionEvaluator',
            'security.acl.has_permission_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Acl\\Expression\\HasPermissionFunctionCompiler',
            'security.expressions.voter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\LazyLoadingExpressionVoter',
            'security.expressions.handler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ContainerAwareExpressionHandler',
            'security.expressions.compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ExpressionCompiler',
            'security.expressions.expression.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Expression',
            'security.expressions.variable_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ContainerAwareVariableCompiler',
            'security.expressions.parameter_compiler.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\Compiler\\ParameterExpressionCompiler',
            'security.expressions.reverse_interpreter.class' => 'JMS\\SecurityExtraBundle\\Security\\Authorization\\Expression\\ReverseInterpreter',
            'security.extra.config_driver.class' => 'JMS\\SecurityExtraBundle\\Metadata\\Driver\\ConfigDriver',
            'security.extra.twig_extension.class' => 'JMS\\SecurityExtraBundle\\Twig\\SecurityExtension',
            'security.authenticated_voter.disabled' => false,
            'security.role_voter.disabled' => false,
            'security.acl_voter.disabled' => false,
            'security.extra.iddqd_ignore_roles' => array(
                0 => 'ROLE_PREVIOUS_ADMIN',
            ),
            'security.iddqd_aliases' => array(
            ),
            'sonata.block.service.empty.class' => 'Sonata\\BlockBundle\\Block\\Service\\EmptyBlockService',
            'sonata.block.service.text.class' => 'Sonata\\BlockBundle\\Block\\Service\\TextBlockService',
            'sonata.block.service.rss.class' => 'Sonata\\BlockBundle\\Block\\Service\\RssBlockService',
            'sonata.block.exception.strategy.manager.class' => 'Sonata\\BlockBundle\\Exception\\Strategy\\StrategyManager',
            'sonata_block.blocks' => array(
                'sonata.admin.block.admin_list' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.admin.block.search_result' => array(
                    'contexts' => array(
                        0 => 'admin',
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.user.block.menu' => array(
                    'contexts' => array(
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.text' => array(
                    'contexts' => array(
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.action' => array(
                    'contexts' => array(
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
                'sonata.block.service.rss' => array(
                    'contexts' => array(
                    ),
                    'cache' => 'sonata.cache.noop',
                    'settings' => array(
                    ),
                ),
            ),
            'sonata_block.blocks_by_class' => array(
            ),
            'sonata_block.cache_blocks' => array(
                'by_type' => array(
                    'sonata.admin.block.admin_list' => 'sonata.cache.noop',
                    'sonata.admin.block.search_result' => 'sonata.cache.noop',
                    'sonata.user.block.menu' => 'sonata.cache.noop',
                    'sonata.block.service.text' => 'sonata.cache.noop',
                    'sonata.block.service.action' => 'sonata.cache.noop',
                    'sonata.block.service.rss' => 'sonata.cache.noop',
                ),
            ),
            'sonata.admin.configuration.templates' => array(
                'user_block' => 'SonataUserBundle:Admin\\Core:user_block.html.twig',
                'layout' => 'SonataAdminBundle::standard_layout.html.twig',
                'ajax' => 'SonataAdminBundle::ajax_layout.html.twig',
                'dashboard' => 'SonataAdminBundle:Core:dashboard.html.twig',
                'list' => 'SonataAdminBundle:CRUD:list.html.twig',
                'show' => 'SonataAdminBundle:CRUD:show.html.twig',
                'edit' => 'SonataAdminBundle:CRUD:edit.html.twig',
                'preview' => 'SonataAdminBundle:CRUD:preview.html.twig',
                'history' => 'SonataAdminBundle:CRUD:history.html.twig',
                'action' => 'SonataAdminBundle:CRUD:action.html.twig',
                'list_block' => 'SonataAdminBundle:Block:block_admin_list.html.twig',
                'short_object_description' => 'SonataAdminBundle:Helper:short-object-description.html.twig',
                'delete' => 'SonataAdminBundle:CRUD:delete.html.twig',
                'search' => 'SonataAdminBundle:Core:search.html.twig',
                'acl' => 'SonataAdminBundle:CRUD:acl.html.twig',
                'history_revision_timestamp' => 'SonataAdminBundle:CRUD:history_revision_timestamp.html.twig',
                'search_result_block' => 'SonataAdminBundle:Block:block_search_result.html.twig',
                'batch' => 'SonataAdminBundle:CRUD:list__batch.html.twig',
                'batch_confirmation' => 'SonataAdminBundle:CRUD:batch_confirmation.html.twig',
                'inner_list_row' => 'SonataAdminBundle:CRUD:list_inner_row.html.twig',
                'base_list_field' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                'pager_links' => 'SonataAdminBundle:Pager:links.html.twig',
                'pager_results' => 'SonataAdminBundle:Pager:results.html.twig',
            ),
            'sonata.admin.configuration.admin_services' => array(
            ),
            'sonata.admin.configuration.dashboard_groups' => array(
            ),
            'sonata.admin.configuration.dashboard_blocks' => array(
                0 => array(
                    'type' => 'sonata.admin.block.admin_list',
                    'position' => 'left',
                    'settings' => array(
                    ),
                ),
                1 => array(
                    'type' => 'sonata.block.service.text',
                    'settings' => array(
                        'content' => '<h2>Welcome to the Sonata Admin</h2> <p>This is a <code>sonata.block.service.text</code> from the Block Bundle, you can create and add new block in these area by configuring the <code>sonata_admin</code> section.</p> <br /> For instance, here a RSS feed parser (<code>sonata.block.service.rss</code>):',
                    ),
                    'position' => 'right',
                ),
                2 => array(
                    'type' => 'sonata.block.service.rss',
                    'settings' => array(
                        'title' => 'Sonata Project\'s Feeds',
                        'url' => 'http://sonata-project.org/blog/archive.rss',
                    ),
                    'position' => 'right',
                ),
            ),
            'sonata.admin.security.acl_user_manager' => 'fos_user.user_manager',
            'sonata.admin.configuration.security.information' => array(
            ),
            'sonata.admin.configuration.security.admin_permissions' => array(
                0 => 'CREATE',
                1 => 'LIST',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'EXPORT',
                5 => 'OPERATOR',
                6 => 'MASTER',
            ),
            'sonata.admin.configuration.security.object_permissions' => array(
                0 => 'VIEW',
                1 => 'EDIT',
                2 => 'DELETE',
                3 => 'UNDELETE',
                4 => 'OPERATOR',
                5 => 'MASTER',
                6 => 'OWNER',
            ),
            'sonata.admin.security.handler.noop.class' => 'Sonata\\AdminBundle\\Security\\Handler\\NoopSecurityHandler',
            'sonata.admin.security.handler.role.class' => 'Sonata\\AdminBundle\\Security\\Handler\\RoleSecurityHandler',
            'sonata.admin.security.handler.acl.class' => 'Sonata\\AdminBundle\\Security\\Handler\\AclSecurityHandler',
            'sonata.admin.security.mask.builder.class' => 'Sonata\\AdminBundle\\Security\\Acl\\Permission\\MaskBuilder',
            'sonata.admin.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminAclManipulator',
            'sonata.admin.object.manipulator.acl.admin.class' => 'Sonata\\AdminBundle\\Util\\AdminObjectAclManipulator',
            'sonata.admin.extension.map' => array(
                'admins' => array(
                ),
                'excludes' => array(
                ),
                'implements' => array(
                ),
                'extends' => array(
                ),
                'instanceof' => array(
                ),
            ),
            'sonata.admin.configuration.filters.persist' => false,
            'knp_menu.factory.class' => 'Knp\\Menu\\Silex\\RouterAwareFactory',
            'knp_menu.helper.class' => 'Knp\\Menu\\Twig\\Helper',
            'knp_menu.menu_provider.chain.class' => 'Knp\\Menu\\Provider\\ChainProvider',
            'knp_menu.menu_provider.container_aware.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\ContainerAwareProvider',
            'knp_menu.menu_provider.builder_alias.class' => 'Knp\\Bundle\\MenuBundle\\Provider\\BuilderAliasProvider',
            'knp_menu.renderer_provider.class' => 'Knp\\Bundle\\MenuBundle\\Renderer\\ContainerAwareProvider',
            'knp_menu.renderer.list.class' => 'Knp\\Menu\\Renderer\\ListRenderer',
            'knp_menu.renderer.list.options' => array(
            ),
            'knp_menu.twig.extension.class' => 'Knp\\Menu\\Twig\\MenuExtension',
            'knp_menu.renderer.twig.class' => 'Knp\\Menu\\Renderer\\TwigRenderer',
            'knp_menu.renderer.twig.options' => array(
            ),
            'knp_menu.renderer.twig.template' => 'knp_menu.html.twig',
            'knp_menu.default_renderer' => 'twig',
            'sonata.admin.manipulator.acl.object.orm.class' => 'Sonata\\DoctrineORMAdminBundle\\Util\\ObjectAclManipulator',
            'sonata_doctrine_orm_admin.entity_manager' => NULL,
            'sonata_doctrine_orm_admin.templates' => array(
                'types' => array(
                    'list' => array(
                        'array' => 'SonataAdminBundle:CRUD:list_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:list_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:list_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:list_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:list_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:list_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'identifier' => 'SonataAdminBundle:CRUD:base_list_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:list_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:list_percent.html.twig',
                    ),
                    'show' => array(
                        'array' => 'SonataAdminBundle:CRUD:show_array.html.twig',
                        'boolean' => 'SonataAdminBundle:CRUD:show_boolean.html.twig',
                        'date' => 'SonataAdminBundle:CRUD:show_date.html.twig',
                        'time' => 'SonataAdminBundle:CRUD:show_time.html.twig',
                        'datetime' => 'SonataAdminBundle:CRUD:show_datetime.html.twig',
                        'text' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'trans' => 'SonataAdminBundle:CRUD:show_trans.html.twig',
                        'string' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'smallint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'bigint' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'integer' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'decimal' => 'SonataAdminBundle:CRUD:base_show_field.html.twig',
                        'currency' => 'SonataAdminBundle:CRUD:base_currency.html.twig',
                        'percent' => 'SonataAdminBundle:CRUD:base_percent.html.twig',
                    ),
                ),
                'form' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig',
                ),
                'filter' => array(
                    0 => 'SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig',
                ),
            ),
            'fos_user.validator.password.class' => 'FOS\\UserBundle\\Validator\\PasswordValidator',
            'fos_user.validator.unique.class' => 'FOS\\UserBundle\\Validator\\UniqueValidator',
            'fos_user.security.interactive_login_listener.class' => 'FOS\\UserBundle\\Security\\InteractiveLoginListener',
            'fos_user.security.login_manager.class' => 'FOS\\UserBundle\\Security\\LoginManager',
            'fos_user.resetting.email.template' => 'FOSUserBundle:Resetting:email.txt.twig',
            'fos_user.registration.confirmation.template' => 'FOSUserBundle:Registration:email.txt.twig',
            'fos_user.storage' => 'orm',
            'fos_user.firewall_name' => 'main',
            'fos_user.model_manager_name' => NULL,
            'fos_user.model.user.class' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'fos_user.template.engine' => 'twig',
            'fos_user.profile.form.type' => 'fos_user_profile',
            'fos_user.profile.form.name' => 'fos_user_profile_form',
            'fos_user.profile.form.validation_groups' => array(
                0 => 'Authentication',
            ),
            'fos_user.registration.confirmation.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.registration.confirmation.enabled' => false,
            'fos_user.registration.form.type' => 'fos_user_registration',
            'fos_user.registration.form.name' => 'fos_user_registration_form',
            'fos_user.registration.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'fos_user.change_password.form.type' => 'fos_user_change_password',
            'fos_user.change_password.form.name' => 'fos_user_change_password_form',
            'fos_user.change_password.form.validation_groups' => array(
                0 => 'ChangePassword',
                1 => 'Default',
            ),
            'fos_user.resetting.email.from_email' => array(
                'webmaster@example.com' => 'webmaster',
            ),
            'fos_user.resetting.token_ttl' => 86400,
            'fos_user.resetting.form.type' => 'fos_user_resetting',
            'fos_user.resetting.form.name' => 'fos_user_resetting_form',
            'fos_user.resetting.form.validation_groups' => array(
                0 => 'ResetPassword',
                1 => 'Default',
            ),
            'fos_user.group_manager.class' => 'FOS\\UserBundle\\Doctrine\\GroupManager',
            'fos_user.model.group.class' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'fos_user.group.form.type' => 'fos_user_group',
            'fos_user.group.form.name' => 'fos_user_group_form',
            'fos_user.group.form.validation_groups' => array(
                0 => 'Registration',
                1 => 'Default',
            ),
            'sonata.user.admin.groupname' => 'sonata_user',
            'sonata.user.admin.user.class' => 'Application\\Sonata\\UserBundle\\Admin\\Entity\\UserAdmin',
            'sonata.user.admin.group.class' => 'Sonata\\UserBundle\\Admin\\Entity\\GroupAdmin',
            'sonata.user.admin.user.entity' => 'Application\\Sonata\\UserBundle\\Entity\\User',
            'sonata.user.admin.group.entity' => 'Application\\Sonata\\UserBundle\\Entity\\Group',
            'sonata.user.admin.user.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.group.translation_domain' => 'SonataUserBundle',
            'sonata.user.admin.user.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.admin.group.controller' => 'SonataAdminBundle:CRUD',
            'sonata.user.impersonating' => array(
                'route' => 'ft_default_homepage',
                'parameters' => array(
                ),
            ),
            'sonata.user.google.authenticator.enabled' => true,
            'sonata.user.profile.form.type' => 'sonata_user_profile',
            'sonata.user.profile.form.name' => 'sonata_user_profile_form',
            'sonata.user.profile.form.validation_groups' => array(
                0 => 'Profile',
            ),
            'doctrine_migrations.dir_name' => '/Volumes/Data/nfs/zfs-student-4/users/2013/sconso/mamp/apps/symfony/htdocs/app/DoctrineMigrations',
            'doctrine_migrations.namespace' => 'Application\\Migrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.name' => 'Application Migrations',
            'web_profiler.controller.profiler.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController',
            'web_profiler.controller.router.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\RouterController',
            'web_profiler.controller.exception.class' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ExceptionController',
            'web_profiler.debug_toolbar.class' => 'Symfony\\Bundle\\WebProfilerBundle\\EventListener\\WebDebugToolbarListener',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'sensio_distribution.webconfigurator.class' => 'Sensio\\Bundle\\DistributionBundle\\Configurator\\Configurator',
            'data_collector.templates' => array(
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => 'SecurityBundle:Collector:security',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => 'DoctrineBundle:Collector:db',
                ),
                'sonata.block.data_collector' => array(
                    0 => 'block',
                    1 => 'SonataBlockBundle:Profiler:block.html.twig',
                ),
            ),
        );
    }
}
